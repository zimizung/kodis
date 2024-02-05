<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\histories;

class HistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $AllHistoryRec = histories::get()->toArray();
        // echo '<pre>'; print_r($AllHistoryRec);die();
        $history = [];
        $i = 0;


        foreach($AllHistoryRec as $historyRec){
            $history[$i]['id'] = $historyRec['id'];
            $history[$i]['kodisno'] = $historyRec['kodisno'];
            $history[$i]['compno'] = $historyRec['compno'];
            $history[$i]['post'] = $historyRec['post'];
            $history[$i]['datefrom'] = $historyRec['datefrom'];
            $history[$i]['dateto'] = $historyRec['dateto'];
            $history[$i]['descr'] = $historyRec['descr'];
            $history[$i]['category'] = $historyRec['category'];
            $history[$i]['rg'] = $historyRec['rg'];
            $history[$i]['salary'] = $historyRec['salary'];
            $history[$i]['hours'] = $historyRec['hours'];
            $history[$i]['outs'] = $historyRec['outs'];
            $i++;
        }
        return view('history',compact('history'));
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
