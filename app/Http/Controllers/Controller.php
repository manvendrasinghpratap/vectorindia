<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Setting;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $rowPerPage = 20;
    protected $setting;
    public function __construct()
    {
      $settings = Setting::where('status','=',1)->pluck('value','field_name');
    //  die();
    }
    public function p($data = array()){
        echo '<pre>'; print_r($data); echo '</pre>';
    }

}
