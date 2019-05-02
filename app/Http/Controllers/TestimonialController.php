<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LatestNewsRequest;
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
