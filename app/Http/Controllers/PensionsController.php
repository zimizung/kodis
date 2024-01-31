<?php

namespace App\Http\Controllers;

use App\Models\pensions;
use Illuminate\Http\Request;

class PensionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllPensionRec = pensions::get()->toArray();
        $records = [];
        $i = 0;

        foreach($AllPensionRec as $pensionRec){
            $records[$i]['id'] = $pensionRec['id'];
            $records[$i]['kodisno'] = $pensionRec['kodisno'];
            $records[$i]['pfund'] = $pensionRec['pfund'];
            $records[$i]['pensno'] = $pensionRec['pensno'];
            $records[$i]['admtofund'] = $pensionRec['admtofund'];
            $records[$i]['admservcounts'] = $pensionRec['admservcounts'];
            $records[$i]['pensexit'] = $pensionRec['pensexit'];
            $records[$i]['salary'] = $pensionRec['salary'];
            $records[$i]['noncontr'] = $pensionRec['noncontr'];
            $records[$i]['reason'] = $pensionRec['reason'];
            $records[$i]['remarkes'] = $pensionRec['remarkes'];
            $i++;
        }
        // echo '<pre>'; print_r($records);die;
        return view('pension',compact('records'));
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
