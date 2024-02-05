<?php

namespace App\Http\Controllers;

use App\Models\personals;
use Illuminate\Http\Request;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllPersonalRec = personals::get()->toArray();
        $personalities = [];
        $i = 0;

        foreach($AllPersonalRec as $personalRec){
            $personalities[$i]['id'] = $personalRec['id'];
            $personalities[$i]['persalno'] = $personalRec['persalno'];
            $personalities[$i]['kodisno'] = $personalRec['kodisno'];
            $personalities[$i]['surname'] = $personalRec['surname'];
            $personalities[$i]['firstname'] = $personalRec['firstname'];
            $personalities[$i]['initials'] = $personalRec['initials'];
            $personalities[$i]['idno'] = $personalRec['idno'];
            $personalities[$i]['dob'] = $personalRec['dob'];
            $personalities[$i]['weddate'] = $personalRec['weddate'];
            $personalities[$i]['gender'] = $personalRec['gender'];
            $personalities[$i]['maritalstatus'] = $personalRec['maritalstatus'];
            $personalities[$i]['language'] = $personalRec['language'];
            $personalities[$i]['incrementmm'] = $personalRec['incrementmm'];
            $personalities[$i]['lastupd'] = $personalRec['lastupd'];
            $personalities[$i]['appointment'] = $personalRec['appointment'];
            $personalities[$i]['maxsal'] = $personalRec['maxsal'];
            $personalities[$i]['wangedrag'] = $personalRec['wangedrag'];
            $personalities[$i]['promotion'] = $personalRec['promotion'];
            $personalities[$i]['time'] = $personalRec['time'];
            $i++;
        }
        return view('personal',compact('personalities'));
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
