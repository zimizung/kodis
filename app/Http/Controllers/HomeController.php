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

        $userPensions = pensions::where('kodisno', '=', $kodis)->paginate(5);

        $userLeave = leaves::where('kodisno', '=', $kodis)->paginate(5);

        $userHistory = histories::where('kodisno', '=', $kodis)->paginate(5);

        $userProperty = properties::where('kodisno', '=', $kodis)->paginate(5);

        $userMortgage = mortgages::where('kodisno', '=', $kodis)->paginate(5);

        // echo '<pre>'; print_r($userLeave);die;


        return view('display', compact('userDetails', 'userPensions', 'userMortgage', 'userProperty', 'userHistory', 'userLeave'));
    }
}
