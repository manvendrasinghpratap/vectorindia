<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Sponsor;

class SponsorController extends Controller
{
    protected $breadcrumb = array('/sponsors'=>'Sponsors','/addnewsponsor'=>'Add New Sponsor');
    protected $listing = array('/addnewsponsor'=>'Add New Sponsor');
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsor = Sponsor::latest()->get();
         return view('admin.sponsor.index')
                                     ->with('page_title','Manage Sponser')
                                     ->with('sponsor',$sponsor)
                                     ->with('listing',$this->listing)
                                     ->with('breadcrumb',$this->breadcrumb);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = array();
      return view('admin.sponsor.create')
                  ->with('page_title','Add New Sponser')
                  ->with('breadcrumb',$this->breadcrumb)
                  ->with('listing',$this->listing);
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
        //$this->p($request->all(),1);
        $imagename = $request->file('imagename');
        if($request->file('imagename')){
            $extension = $imagename->getClientOriginalExtension();
            Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
        }
        $sponsorDetails = new Sponsor;
        $sponsorDetails->heading            =   $request->heading;
        $sponsorDetails->description        =   $request->description;
        $sponsorDetails->sub_heading2         =   $request->sub_heading2;
        $sponsorDetails->sub_heading        =   $request->sub_heading;

        if($request->file('imagename'))
                $sponsorDetails->imagename  =   $imagename->getFilename().'.'.$extension;
        $sponsorDetails->save();
            $request->session()->flash('alert-success', trans('message.sponsorupdatesuccess'));
            return redirect('sponsors');
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
        $id=  decodeParam($id);
        $sponsorDetails = Sponsor::find($id);
        return view('admin.sponsor.edit')->with('page_title','Sponsor')
        ->with('sponsorDetails',$sponsorDetails)
        ->with('listing',$this->listing)
        ->with('breadcrumb',$this->breadcrumb);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if(!empty($id)) {
            $file_path = storage_path('app/public/'.$request->imagename);
            $imagename = $request->file('imagename');
            if(isset($imagename) && !empty($imagename)){
                if(file_exists($file_path))
                    unlink($file_path);
                $extension = $imagename->getClientOriginalExtension();
                Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
            }

        $sponsorDetails                     =   Sponsor::find($id);
        $sponsorDetails->heading            =   $request->heading;
        $sponsorDetails->description        =   $request->description;
        $sponsorDetails->sub_heading2         =   $request->sub_heading2;
        $sponsorDetails->sub_heading        =   $request->sub_heading;        

        if(isset($imagename) && !empty($imagename))
                $sponsorDetails->imagename  =   $imagename->getFilename().'.'.$extension;

        $sponsorDetails->save();
        $request->session()->flash('alert-success', trans('message.bannerupdatesuccess'));
            return redirect('sponsors');
        }
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
