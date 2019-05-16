<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Banner;

class BannerController extends Controller
{
    protected $breadcrumb = array('/banners'=>'Banners','/addnewbanner'=>'Add New Banner');
    protected $listing = array('/addnewbanner'=>'Add New Banner');
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
        $banner = Banner::latest()->get();
         return view('admin.banner.index')
                                     ->with('page_title','Manage Banner')
                                     ->with('banner',$banner)
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
      return view('admin.banner.create')
                  ->with('page_title','Add New Banner')
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
        $imagename = $request->file('imagename');
        if($request->file('imagename')){
            $extension = $imagename->getClientOriginalExtension();
            Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
        }
        $bannerDetails = new Banner;
        $bannerDetails->heading            =   $request->heading;
        $bannerDetails->description        =   $request->description;
        $bannerDetails->sub_heading2         =   $request->sub_heading2;
        $bannerDetails->sub_heading        =   $request->sub_heading;

        if($request->file('imagename'))
                $bannerDetails->imagename  =   $imagename->getFilename().'.'.$extension;
        $bannerDetails->save();
            $request->session()->flash('alert-success', trans('message.banneraddedsuccess'));
            return redirect('banners');
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
        $bannerDetails = Banner::find($id);
        return view('admin.banner.edit')->with('page_title','Banner')
        ->with('bannerDetails',$bannerDetails)
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

        $bannerDetails                     =   Banner::find($id);
        $bannerDetails->heading            =   $request->heading;
        $bannerDetails->description        =   $request->description;
        $bannerDetails->sub_heading2         =   $request->sub_heading2;
        $bannerDetails->sub_heading        =   $request->sub_heading;        

        if(isset($imagename) && !empty($imagename))
                $bannerDetails->imagename  =   $imagename->getFilename().'.'.$extension;

        $bannerDetails->save();
        $request->session()->flash('alert-success', trans('message.bannerupdatesuccess'));
            return redirect('banners');
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
