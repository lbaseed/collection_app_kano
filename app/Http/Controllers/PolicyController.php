<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Owner;
use App\Models\Policy;

use Illuminate\Support\Facades\Auth;


class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.collection.newCollection');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $bills = Policy::all();
        return view('pages.collection.newCollection', ['bills'=>$bills]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $fields)
    {
        //validate
        $fields->validate([
            "last_name" => "required",
            "phone_num" => "required|min:13|numeric",
            "address" => "required",
            "vehicle_make" => "required",
            "vehicle_type" => "required",
            "chasis_number" => "required",
            "registration_number" => "required",
        ]);

       

            // Owner Object
            $owner = Owner::create([
                "last_name" => $fields["last_name"],
                "other_names" => $fields["other_names"],
                "gender" => $fields["gender"],
                "phone_num" => $fields["phone_num"],
                "email" => $fields["email"] ? $fields["email"] : "sales@trustlinkins.com.ng",
                "dob" => $fields["dob"],
                "address" => $fields["address"],
                "tin" => $fields["tin"],
                "occupation" => $fields["occupation"] ? $fields["occupation"] : "self employed",
                "created_by"=>Auth::user()->id,
            ]);

            // vehicle Object
            $vehicle = Vehicle::create([
                "owner_id" => $owner->id,
                "chasis_number" => $fields["chasis_number"],
                "engine_number" => $fields["engine_number"] ? $fields["engine_number"] : "000000",
                "registration_number" => strtoupper($fields["registration_number"]),
                "year_of_make" => $fields["year_of_make"]? $fields["year_of_make"] : 2000,
                "vehicle_model" => $fields["vehicle_model"] ? $fields["vehicle_model"] : "No Model",
                "vehicle_make" => $fields["vehicle_make"],
                "vehicle_colour" => $fields["vehicle_colour"] ? $fields["vehicle_colour"]: "Custom",
                "vehicle_type" => $fields["vehicle_type"],
                "commercial_type" => $fields["vehicle_type"] == "CVO" ? $fields["commercial_type"] : "private",
                "created_by"=>Auth::user()->id,

            ]);

            // switch case for amount
            // $amount = 0;
            switch ($fields["vehicle_type"]) {
                case 'PMO':
                        $amount = 5000;
                    break;
                case 'MCO':
                    $amount = 2500;
                    break;
                case 'CVO':
                    $amount = 7500;
                    break;
            }

            // Policy Object
            $policy = Policy::create([
                "owner_id" => $owner->id,
                "vehicle_id" => $vehicle->id,
                "registration_number" => strtoupper($fields["registration_number"]),
                "status" => "NOT_SENT",
                "policy_type" => $fields["vehicle_type"],
                "amount" => $amount,
                "vendor" =>Auth::user()->id
            ]);


        return $policy ? redirect(route("bills"))->withSuccess("Insurance Bill Created Successfully!") : redirect()->back()->withError("Failed to Update");
        
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

    public function renew(){

        $bills = Policy::all();
        return view('pages.collection.renew', ['data'=>'', "bills" => $bills]);
    }
    
    public function processRenew(Request $fields){
        
        // process renewal here
    }
    public function searchPolicy(Request $fields){
        
        // validate search field
        $fields->validate([
            "regNumber" => "required"
        ]);

        $search = Policy::where('registration_number', $fields['regNumber']);

        return view('pages.collection.renew', ['data'=>$search]);

    }


    public function pending(){
        
        return view('pages.collection.pending', ['bills'=>[]]);
    }

    public function pending_bills(Request $fields){

        $fields->validate([
            "date_from" =>"required",
            "date_to" =>"required",
        ]);

        if($fields['date_to'] > $fields['date_from']){
            // /fetch transaction
            $pending= Policy::whereBetween('created_at',[$fields['date_from']." 00:00:00", $fields['date_to']." 23:59:59"])
            ->where("status","NOT_SENT")
            ->get();
            return view('pages.collection.pending', ['bills'=> $pending]);
        }else{
            // return error date not in proper order
        return redirect(route("pending"))->withError("Not Proper Date");
        }
        
    }

    
}
