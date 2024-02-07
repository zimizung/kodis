<?php

namespace App\Http\Controllers;

use App\Models\histories;
use App\Models\leaves;
use App\Models\mortgages;
use App\Models\pensions;
use App\Models\personals;
use App\Models\properties;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allPersonalRec = personals::paginate(10);
        // echo '<pre>'; print_r($allPersonalRec);die;
        return view('home', compact('allPersonalRec'));
    }
    public function getUser($kodis){

        $userDetails = personals::where('kodisno', '=', $kodis)->first();

        $userPension = pensions::where('kodisno', '=', $kodis)->first();
        if($userPension != null){
            $userPension->surname = strtok(ucwords(strtolower($userDetails['surname'])), " ");
        }


        $userLeave = leaves::where('kodisno', '=', $kodis)->first();
        if($userLeave != null){
            $userLeave->surname = strtok(ucwords(strtolower($userDetails['surname'])), " ");
        }

        $userHistory = histories::where('kodisno', '=', $kodis)->first();
        if($userHistory != null){
            $userHistory->surname = strtok(ucwords(strtolower($userDetails['surname'])), " ");
        }

        $userProperty = properties::where('kodisno', '=', $kodis)->first();
        if($userProperty != null){
            $userProperty->surname = strtok(ucwords(strtolower($userDetails['surname'])), " ");
        }

        $userMortgage = mortgages::where('kodisno', '=', $kodis)->first();
        if($userMortgage != null){
            $userMortgage->surname = strtok(ucwords(strtolower($userDetails['surname'])), " ");
        }

        // echo '<pre>'; print_r($userMortgage);die;

        return view('display', compact('userDetails', 'userPension', 'userMortgage', 'userProperty', 'userHistory', 'userLeave'));
    }
}
