<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $this->p(Auth::user());
            return redirect()->route('dashboard');
        }
        $breadcrumb = array('/invoices'=>'Invoices','/generateInvoice'=>'Generate New Invoice');
        return view('admin.dashboard')->with('page_title','Dashboard')->with('breadcrumb',$breadcrumb);
    }
    public function dashboard()
    {
        $totalinvoices = 0;
        $todaysinvoices =0;
        //$this->p($todaysinvoices); die();
        $totalProducts = 0;
        $totalBanks = 0;
        $breadcrumb = array('/invoices'=>'Invoices','/generateInvoice'=>'Generate New Invoice');
        return view('admin.dashboard')
            ->with('page_title','Dashboard')
            ->with('breadcrumb',$breadcrumb)
            ->with('totalProducts',$totalProducts)
            ->with('todaysinvoices',$todaysinvoices)
            ->with('totalBanks',$totalBanks)
            ->with('totalinvoices',$totalinvoices);
    }
    public function login(){
        //return view('user.dashboard');
    }
}
