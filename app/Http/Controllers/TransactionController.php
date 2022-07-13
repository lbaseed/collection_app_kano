<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Policy;
use App\Lib\IEIHelper;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $this->new_policy($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function total_revenue(){
        $trans = Transaction::all();
        return view('pages.collection.total', ['transactions'=>[]]);
    }

    public function total_transaction(Request $fields){
        $fields->validate([
            "date_from" =>"required",
            "date_to" =>"required",
        ]);

        if($fields['date_to'] > $fields['date_from']){
            // /fetch transaction
            $trans= Transaction::whereBetween('trans_date',[$fields['date_from'], $fields['date_to']])->get();
            return view('pages.collection.total', ['transactions'=> $trans]);
        }else{
            // return error date not in proper order
        return redirect(route("trans_fetch"))->withError("Not Proper Date");
        }
    }

    public function vendor_collection(){
        $vendors = User::where('role','vendor')
        ->orwhere('role','manager')
        ->get();
        return view('pages.collection.vendor', ['transactions'=>[], 'vendors'=>$vendors]);
    }

    public function vendor_transactions(Request $fields){
        $fields->validate([
            "date_from" =>"required",
            "date_to" =>"required",
        ]);

        if($fields['date_to'] > $fields['date_from']){
            // /fetch transaction
            $vendors = User::where('role','vendor')->get();
            $trans= Transaction::whereBetween('trans_date',[$fields['date_from'], $fields['date_to']])->get();
            return view('pages.collection.vendor', ['transactions'=> $trans, 'vendors'=>$vendors]);
        }else{
            // return error date not in proper order
        return redirect(route("trans_fetch"))->withError("Not Proper Date");
        }
    }

    // send data to IEI and receive a new Policy Number
    public function new_policy($id){

        $ieiObject = new IEIHelper();

        // fetch policy information to be sent to IEI
        if($id){
        
            $policy = Policy::find($id);

            $data = [
                "insuranceType"=> $policy->policy_type,
                "fullName"=> $policy->owner->last_name ." ".$policy->owner->other_names,
                "mobileNumber"=> $policy->owner->phone_num, //all phone number must start with 234
                "emailAddress"=> $policy->owner->email,
                "adddress"=> $policy->owner->address,
                "state"=> "Kano",
                "occupation"=> $policy->owner->occupation,
                "dateOFBirth"=> $policy->owner->dob." 00:00:00",
                "gender"=> $policy->owner->gender,
                "vehicleColour"=> $policy->vehicle->vehicle_colour,
                "vehicleMake"=> $policy->vehicle->vehicle_make,
                "vehicleModel"=> $policy->vehicle->vehicle_model,
                "yearOfMake"=> $policy->vehicle->year_of_make,
                "registrationNumber"=> $policy->vehicle->registration_number,
                "engineNumber"=> $policy->vehicle->engine_number,
                "chassisNumber"=> $policy->vehicle->chasis_number, //16 digit chasis
                "commercialType"=> $policy->vehicle->commercial_type
            ];

            $token = "Bearer ".$ieiObject->get_token();
        
            $newPolicyResponse = $ieiObject->generate_policy_iei($token, $data);

            // check if its not an error response
            if($newPolicyResponse["res"] == "Error"){
                print_r($newPolicyResponse["msg"]);
            }else {
                
                // update policy information
                $policy->Policy_num = $newPolicyResponse["res"]->policyNumber;
                $policy->certificate_number = $newPolicyResponse["res"]->certificateNumber;
                $policy->iei_ref = $newPolicyResponse["res"]->transId;
                $split_dt_start = explode("T", $newPolicyResponse["res"]->commencementDate);
                $policy->start_date = $split_dt_start[0];
                $split_dt_exp = explode("T", $newPolicyResponse["res"]->expirationDate);
                $policy->expiration_date = $split_dt_exp[0];
                $policy->status = "PAID";
                $policy->vendor = Auth::user()->id;
    
                // save updated data
                $policy->save();
    
                // create Transaction for the updated record
                $transaction = Transaction::create([
                    "policy_id"=> $policy->id,
                    "amount" => $policy->amount,
                    "trans_date" => $split_dt_start[0],
                    "policy_type" => $policy->policy_type,
                    "iei_ref" => $newPolicyResponse["res"]->transId,
                    "status" => "PAID",
                    "trans_type"=>"fresh",
                    "vendor" => Auth::user()->id,
                ]);
    
                if($transaction) {
                    echo "Successful";
                }
            }
        }
        
    }

}
