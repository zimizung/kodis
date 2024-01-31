<?php

namespace App\Http\Controllers;

use App\Models\mortgages;
use Illuminate\Http\Request;

class MortgagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllMortgageRec = mortgages::get()->toArray();
        $mortgages = [];
        $i = 0;

        foreach($AllMortgageRec as $MortgageRec){
            $mortgages[$i]['id'] = $MortgageRec['id'];
            $mortgages[$i]['kodisno'] = $MortgageRec['kodisno'];
            $mortgages[$i]['plotnumber'] = $MortgageRec['plotnumber'];
            $mortgages[$i]['mortgages'] = $MortgageRec['mortgagee'];
            $mortgages[$i]['period'] = $MortgageRec['period'];
            $mortgages[$i]['loadamount'] = $MortgageRec['loanamount'];
            $mortgages[$i]['dateregister'] = $MortgageRec['dateregister'];
            $mortgages[$i]['firstinstallment'] = $MortgageRec['firstinstallment'];
            $mortgages[$i]['fiche'] = $MortgageRec['fiche'];
            $mortgages[$i]['accno'] = $MortgageRec['accno'];
            $mortgages[$i]['allowmat'] = $MortgageRec['allowamt'];
            $mortgages[$i]['workcompl'] = $MortgageRec['workcompl'];
            $mortgages[$i]['stopallowance'] = $MortgageRec['stopallowance'];
            $mortgages[$i]['terminateds'] = $MortgageRec['terminateds'];
            $mortgages[$i]['reason'] = $MortgageRec['reason'];
            $mortgages[$i]['remarks'] = $MortgageRec['remarkes'];
            $i++;
        }
        return view('mortgage',compact('mortgages'));
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
}
