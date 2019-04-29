<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Http\Requests\AddressRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $breadcrumb = array('/address'=>'Address','/addnewAddress'=>'Add New Address');
    protected $listing = array('/addnewAddress'=>'Add New Address');
    public function __construct()
    {
        $this->middleware('auth');
    }
    /** use App\Grouping;
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $addresses = Address::orderBy('id', 'desc')
                            ->paginate($this->rowPerPage);
      return view('admin.address.index')
      ->with('page_title','Manage Address')
      ->with('addresses',$addresses)
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
        return view('admin.address.create')
                    ->with('page_title','Add New Address')
                    ->with('breadcrumb',$this->breadcrumb)
                    ->with('listing',$this->listing);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
      $addressDetails = new Address;
      $addressDetails->address     =    $request->address;
      $addressDetails->email   =    $request->get('email','');
      $addressDetails->mobile   =    $request->get('mobile','');
      $addressDetails->phoneno   =    $request->get('phoneno','');
      $addressDetails->googlemapsrc   =    $request->get('googlemapsrc','');
      $addressDetails->save();
      $request->session()->flash('alert-success', trans('message.addresssave'));
      return redirect('address');

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
    $id=  decodeParam($id);
    $addressDetails = Address::find($id);
    return view('admin.address.edit')->with('page_title','Address')
        ->with('addressDetails',$addressDetails)
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
    public function update(AddressRequest $request)
    {
        //$this->p($request->all());
        $id = $request->id;
      if(!empty($id)) {
            $addressDetails                 =    Address::find($id);
            $addressDetails->address        =    $request->address;
            $addressDetails->email          =    $request->get('email','');
            $addressDetails->mobile         =    $request->get('mobile','');
            $addressDetails->phoneno        =    $request->get('phoneno','');
            $addressDetails->googlemapsrc   =    $request->get('googlemapsrc','');
            $addressDetails->save();
          $request->session()->flash('alert-success', trans('message.addressupdated'));
          return redirect('address');
      }
        // addressupdated
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
