<?php

namespace App\Http\Controllers;

use App\Models\leaves;
use Illuminate\Http\Request;

class LeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allLeaveRec = leaves::get()->toArray();
        $leaves = [];
        $i = 0;

        foreach($allLeaveRec as $leaveRec){
            $leaves[$i]['id'] = $leaveRec['id'];
            $leaves[$i]['kodisno'] = $leaveRec['kodisno'];
            $leaves[$i]['leavetype'] = $leaveRec['leavetype'];
            $leaves[$i]['leavecondition'] = $leaveRec['leavecondition'];
            $leaves[$i]['leavefrom'] = $leaveRec['leavefrom'];
            $leaves[$i]['leaveto'] = $leaveRec['leaveto'];
            $leaves[$i]['days'] = $leaveRec['days'];
            $leaves[$i]['payment'] = $leaveRec['payment'];
            $i++;
        }
        return view('leave',compact('leaves'));
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
