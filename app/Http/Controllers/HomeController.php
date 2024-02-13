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
    public function index(Request $request)
    {
        $filter = $request->searchParameter;
        
        if($filter){
            $allPersonalRec = personals::where('kodisno', 'LIKE', '%' . $filter . '%')->orWhere('persalno', 'LIKE', '%' . $filter . '%')->orWhere('surname', 'LIKE', '%' . $filter . '%')->paginate(10);
        }
        else{
            $allPersonalRec = personals::paginate(10);
        }
        
        return view('home', compact('allPersonalRec'));
    }
    public function getUser($kodis){

        $userDetails = personals::where('kodisno', '=', $kodis)->first();

        $userPensions = pensions::where('kodisno', '=', $kodis)->get()->toArray();
        if($userPensions != null){
            foreach($userPensions as &$Pensions){
                $Pensions['surname'] = strtok(ucwords(strtolower($userDetails['surname'])), " ");
            }
        }

        $userLeave = leaves::where('kodisno', '=', $kodis)->get()->toArray();
        if($userLeave != null){
            foreach($userLeave as &$leave){
                $leave['surname'] = strtok(ucwords(strtolower($userDetails['surname'])), " ");
            }
        }

        $userHistory = histories::where('kodisno', '=', $kodis)->get()->toArray();
        if($userHistory != null){
            foreach($userHistory as &$history){
                $history['surname'] = strtok(ucwords(strtolower($userDetails['surname'])), " ");
            }
        }

        $userProperty = properties::where('kodisno', '=', $kodis)->get()->toArray();
        if($userProperty != null){
            foreach($userProperty as &$property){
                $property['surname'] = strtok(ucwords(strtolower($userDetails['surname'])), " ");
            }
        }

        $userMortgage = mortgages::where('kodisno', '=', $kodis)->get()->toArray();
        if($userMortgage != null){
            foreach($userMortgage as &$mortgage){
                $mortgage['surname'] = strtok(ucwords(strtolower($userDetails['surname'])), " ");
            }
        }
        // echo '<pre>'; print_r($userMortgage);die;


        return view('display', compact('userDetails', 'userPensions', 'userMortgage', 'userProperty', 'userHistory', 'userLeave'));
    }
}
