<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $revenues = (object)[
            "daily" => $this->getRevenue(date("Y-m-d"), 'daily'),
            "daily_trans" => $this->getTransaction(date("Y-m-d"), 'daily'),
            "monthly" => $this->getRevenue(date("m"), 'monthly'),
            "monthly_trans" => $this->getTransaction(date("m"), 'monthly'),
        ];

        $itemsStat = (object)[
            "revenue" => (object)[
                                    "daily" => (object)[
                                        "cvo" => $this->itemRevenue("CVO", date("Y-m-d"), 'daily'),
                                        "mco" => $this->itemRevenue("MCO", date("Y-m-d"), 'daily'),
                                        "pmo" => $this->itemRevenue("PMO", date("Y-m-d"), 'daily')
                                        ],
                                    "monthly" => (object)[
                                        "cvo" => $this->itemRevenue("CVO", date("m"), 'monthly'),
                                        "mco" => $this->itemRevenue("MCO", date("m"), 'monthly'),
                                        "pmo" => $this->itemRevenue("PMO", date("m"), 'monthly')
                                        ],                
                                ],
            "trans" => (object)[
                                    "daily" => (Object)[
                                        "cvo" => $this->itemTrans("CVO", date("Y-m-d"), 'daily'),
                                        "mco" => $this->itemTrans("MCO", date("Y-m-d"), 'daily'),
                                        "pmo" => $this->itemTrans("PMO", date("Y-m-d"), 'daily')
                                        ],
                                    "monthly" => (Object)[
                                        "cvo" => $this->itemTrans("CVO", date("m"), 'monthly'),
                                        "mco" => $this->itemTrans("MCO", date("m"), 'monthly'),
                                        "pmo" => $this->itemTrans("PMO", date("m"), 'monthly')
                                        ],
                                ],

            

        ];
        return view("landing", ["revenue" => $revenues, "stat"=>$itemsStat]);
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

    function getRevenue($period, $flag){
        $flag =="daily" ?  
                    $sum = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('trans_date', $period)
                    ->sum('amount')
                    : 
                    $sum = DB::table('transactions')
                    ->where('status','PAID')
                    ->whereMonth('trans_date', $period)
                    ->sum('amount')
                    ;
        return $sum;
    }

    function getTransaction($period, $flag){
        $flag == 'daily'? 
                    $count = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('trans_date', $period)
                    ->count() 
                    :
                    $count = DB::table('transactions')
                    ->where('status','PAID')
                    ->whereMonth('trans_date', $period)
                    ->count();
        return $count;
    }

    function itemRevenue($item,$period, $flag){
                    $flag=='daily'?
                    $sum = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('policy_type',$item)
                    ->where('trans_date', $period)
                    ->sum('amount')
                    :
                    $sum = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('policy_type',$item)
                    ->whereMonth('trans_date', $period)
                    ->sum('amount');
        return $sum;
    }
    function itemTrans($item, $period, $flag){
                    $flag=='daily'?
                    $count = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('policy_type',$item)
                    ->where('trans_date', $period)
                    ->count()
                    :
                    $count = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('policy_type',$item)
                    ->whereMonth('trans_date', $period)
                    ->count();
        return $count;
    }

    function itemRevenueRange($item,$from, $to){
        $mothly = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('policy_type',$item)
                    ->whereBetween('trans_date', [$from, $to])
                    ->sum('amount');
        return $mothly;
    }
    function itemTransRange($item, $from, $to){
        $mothly = DB::table('transactions')
                    ->where('status','PAID')
                    ->where('policy_type',$item)
                    ->whereBetween('trans_date', [$from, $to])
                    ->count();
        return $mothly;
    }


}
