<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Http\Requests\LatestNewsRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Address;

class LatestNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $breadcrumb = array('/latestnews'=>'Latest News','/addnewLatestnews'=>'Add New News');
    protected $listing = array('/addnewLatestnews'=>'Add New News');
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $latestNews = News::latest()->get();
        //$this->p($latestNews,0);
        return view('admin.latestnews.index')
                                    ->with('page_title','Manage News')
                                    ->with('latestNews',$latestNews)
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
        return view('admin.latestnews.create')
                    ->with('page_title','Add New News')
                    ->with('breadcrumb',$this->breadcrumb)
                    ->with('listing',$this->listing);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LatestNewsRequest $request)
    {
        //
        $this->p($request->all(),0);
        $imagename = $request->file('imagename');
        if($request->file('imagename')){
            $extension = $imagename->getClientOriginalExtension();
            Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
        }
    	$newDetails = new News;
        $newDetails->heading            =   $request->heading;
        $newDetails->description        =   $request->description;
        $newDetails->written_by          =   $request->written_by;

        if($request->file('imagename'))
    		    $newDetails->imagename  =   $imagename->getFilename().'.'.$extension;
      	$newDetails->save();
            $request->session()->flash('alert-success', trans('message.newsaddedsuccess'));
            return redirect('latestnews');
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
        $newsDetails = News::find($id);
        return view('admin.latestnews.edit')->with('page_title','News')
        ->with('newsDetails',$newsDetails)
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
        $this->p($request->all(),1);
        if(!empty($id)) {
            $file_path = storage_path('app/public/'.$request->imagename);
            $imagename = $request->file('imagename');
            if(isset($imagename) && !empty($imagename)){
                if(file_exists($file_path))
                    unlink($file_path);
                $extension = $imagename->getClientOriginalExtension();
                Storage::disk('public')->put($imagename->getFilename().'.'.$extension,  File::get($imagename));
            }

        $newDetails                     =   News::find($id);
        $newDetails->heading            =   $request->heading;
        $newDetails->description        =   $request->description;
        $newDetails->written_by         =   $request->written_by;

        if(isset($cover) && !empty($cover))
    		    $newDetails->imagename  =   $imagename->getFilename().'.'.$extension;
        
        $newDetails->save();
        $request->session()->flash('alert-success', trans('message.newsupdatesuccess'));
            return redirect('latestnews');
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
