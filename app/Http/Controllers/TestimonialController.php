<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $breadcrumb = array('/testimonials'=>'Testimonials','/addnewtestimonials'=>'Add New Testimonial');
     protected $listing = array('/addnewtestimonials'=>'Add New Testimonial');
     public function __construct()
     {
         $this->middleware('auth'); 
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $testimonial = Testimonial::latest()->get();
         return view('admin.testimonial.index')
                                     ->with('page_title','Manage Testimonial')
                                     ->with('testimonial',$testimonial)
                                     ->with('listing',$this->listing)
                                     ->with('breadcrumb',$this->breadcrumb);
     }

    public function create()
    {
      $breadcrumb = array();
      return view('admin.testimonial.create')
                  ->with('page_title','Add New Testimonial')
                  ->with('breadcrumb',$this->breadcrumb)
                  ->with('listing',$this->listing);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        //
        $this->p($request->all(),0);
        $imagename = $request->file('imagename');
        if($request->file('imagename')){
            $extension = $imagename->getClientOriginalExtension();
            Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
        }
        $testimonialDetails = new Testimonial;
        $testimonialDetails->heading            =   $request->heading;
        $testimonialDetails->description        =   $request->description;
        $testimonialDetails->written_by         =   $request->written_by;
        $testimonialDetails->sub_heading        =   $request->sub_heading;

        if($request->file('imagename'))
                $testimonialDetails->imagename  =   $imagename->getFilename().'.'.$extension;
        $testimonialDetails->save();
            $request->session()->flash('alert-success', trans('message.testimonailaddedsuccess'));
            return redirect('testimonials');
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
        $testimonialDetails = Testimonial::find($id);
        return view('admin.testimonial.edit')->with('page_title','News')
        ->with('testimonialDetails',$testimonialDetails)
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
        //$this->p($request->all(),0);
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

        $testimonialDetails                     =   Testimonial::find($id);
        $testimonialDetails->heading            =   $request->heading;
        $testimonialDetails->description        =   $request->description;
        $testimonialDetails->written_by         =   $request->written_by;
        $testimonialDetails->sub_heading        =   $request->sub_heading;

        if(isset($imagename) && !empty($imagename))
                $testimonialDetails->imagename  =   $imagename->getFilename().'.'.$extension;

        $testimonialDetails->save();
        $request->session()->flash('alert-success', trans('message.testimonialupdatesuccess'));
            return redirect('testimonials');
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
