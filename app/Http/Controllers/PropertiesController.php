<?php

namespace App\Http\Controllers;

use App\Models\properties;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllPropertiesRec = properties::get()->toArray();
        $records = [];
        $i = 0;

        foreach($AllPropertiesRec as $propertiesRec){
            $records[$i]['id'] = $propertiesRec['id'];
            $records[$i]['kodisno'] = $propertiesRec['kodisno'];
            $records[$i]['plotno'] = $propertiesRec['plotno'];
            $records[$i]['bonds'] = $propertiesRec['bonds'];
            $records[$i]['addr1'] = $propertiesRec['addr1'];
            $records[$i]['addr2'] = $propertiesRec['addr2'];
            $records[$i]['addr3'] = $propertiesRec['addr3'];
            $records[$i]['pcode'] = $propertiesRec['pcode'];
            $records[$i]['occupationdate'] = $propertiesRec['occupationdate'];
            $records[$i]['saledate'] = $propertiesRec['saledate'];
            $records[$i]['otherproperty'] = $propertiesRec['otherproperty'];
            $records[$i]['numberowners'] = $propertiesRec['numberowners'];
            $records[$i]['datevacated'] = $propertiesRec['datevacated'];
            $records[$i]['transferdate'] = $propertiesRec['transferdate'];
            $i++;
        }
        return view('property',compact('records'));
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
