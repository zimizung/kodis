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
        
        if(isset($filter)){
            session()->put('filter',$filter);
            $allPersonalRec = personals::where('kodisno', 'LIKE', '%' . $filter . '%')
            ->orWhere('persalno', 'LIKE', '%' . $filter . '%')->orWhere('surname', 'LIKE', '%' . $filter . '%')
            ->paginate(8);
        }
        else{
            $request->session()->forget('filter');
            $allPersonalRec = personals::paginate(8);
        }
        
        return view('home', compact('allPersonalRec','filter'));
    }
    public function getUser($kodis){

        $userDetails = personals::where('kodisno', '=', $kodis)->first();
        return view('display', compact('userDetails'));
    }
}
