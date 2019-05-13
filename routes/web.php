<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('dashboard');
});*/
Route::get('/generatepassword',function(){

  if(isset($_REQUEST['newpassword'])){
    echo Hash::make($_REQUEST['newpassword']); die();
  }

});

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','MainWebsiteController@index')->name('index');
Route::get('/login','AdminController@index');

Auth::routes();
Route::get('/settings','SettingController@setting')->name('settings');
Route::post('/updateSettings','SettingController@updateSettings')->name('updateSettings');

/* Address Begin */

Route::get('/address','AddressController@index')->name('address');
Route::get('/addnewAddress','AddressController@create')->name('addnewAddress');
Route::post('/storenewAddress','AddressController@store')->name('storenewAddress');

Route::get('/editaddress/{id}','AddressController@edit')->name('editaddress');
Route::post('/updateaddress','AddressController@update')->name('updateaddress');

/* Address Ends */

/* Latest News Begin */
Route::get('/latestnews','LatestNewsController@index')->name('latestnews');
Route::get('/addnewLatestnews','LatestNewsController@create')->name('addnewLatestnews');
Route::post('/storenewLatestnews','LatestNewsController@store')->name('storenewLatestnews');
Route::get('/editLatestnews/{id}','LatestNewsController@edit')->name('editLatestnews');
Route::post('/updateLatestnews','LatestNewsController@update')->name('updateLatestnews');
/* Latest News Ends */
Route::get('/single/{type}/{id}','MainWebsiteController@single')->name('single');

/* Banner Begin */

Route::get('/banners','BannerController@index')->name('banners');
Route::get('/addnewBanner','BannerController@create')->name('addnewBanner');
Route::post('/storenewBanner','BannerController@store')->name('storenewBanner');

Route::get('/editBanner/{id}','BannerController@edit')->name('editBanner');
Route::post('/updateBanner','BannerController@update')->name('updateBanner');

/* Banner Ends */

/* Testimonial Begin */
Route::get('/testimonials','TestimonialController@index')->name('testimonials');
Route::get('/addnewtestimonials','TestimonialController@create')->name('addnewtestimonials');
Route::post('/storetestimonials','TestimonialController@store')->name('storetestimonials');
Route::get('/edittestimonials/{id}','TestimonialController@edit')->name('edittestimonials');
Route::post('/updatetestimonials','TestimonialController@update')->name('updatetestimonials');
/* Testimonial Ends */

/* Testimonial Begin */
Route::get('/sponsors','SponsorController@index')->name('sponsors');
Route::get('/addnewsponsor','SponsorController@create')->name('addnewsponsor');
Route::post('/storesponsor','SponsorController@store')->name('storesponsor');
Route::get('/editsponsor/{id}','SponsorController@edit')->name('editsponsor');
Route::post('/updatesponsor','SponsorController@update')->name('updatesponsor');
/* Testimonial Ends */





Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
/* main Skill Controller begin */
Route::get('skills','SkillController@index');
Route::get('addmainskill','SkillController@create')->name('addmainskill');
Route::post('store','SkillController@store')->name('store');
Route::get('editmainskill/{id}','SkillController@edit')->name('edit');
Route::post('updatemainskill','SkillController@update');
/* Main Skill Controller end */

/* sub Skill Controller begin */
Route::get('subSkills','SubSkillController@index');
Route::get('addSubskill','SubSkillController@create')->name('addsubskill');
Route::post('subskillstore','SubSkillController@store')->name('subskillstore');
Route::get('editSubskill/{id}','SubSkillController@edit')->name('editSubskill');
Route::post('updateSubskill','SubSkillController@update');
/* Sub Skill Controller end */



/* Employees Routes Start*/
Route::get('employees','EmployeeController@index')->name('employees');
Route::get('addemployee','EmployeeController@create');
Route::post('addemployee','EmployeeController@store');
Route::get('editemployee/{id}','EmployeeController@edit');
Route::post('updateemployee','EmployeeController@update');
/* Employees Routes Ends*/

/*Rate Employee SRoute Date: 13march2019 Begin*/
Route::get('rateemployee/{employeeId}','RateEmployeeController@index');
Route::post('ratingstoreemployee','RateEmployeeController@store')->name('ratingstoreemployee');

/*Rate Employee SRoute Date: 13march2019 End*/

/*Report Section Begin */
Route::get('report/','ReportController@index')->name('report');
Route::post('ratingstoreemployee','RateEmployeeController@store')->name('ratingstoreemployee');
/*Report Section End*/


/*Import Section Begin */
Route::get('import/','ImportController@index')->name('import');
Route::get('samplecsv/','ImportController@show')->name('samplecsv');
Route::post('uploademployeecsv','ImportController@store')->name('uploademployeecsv');
/*Import Section End*/

/*Import Section Begin */
Route::get('export/','ExportController@index')->name('export');
//Route::post('ratingstoreemployee','ImportController@store')->name('ratingstoreemployee');
/*Import Section End*/

/*Route For courses */
Route::get('courses','CourseController@index')->name('listCourse');
Route::get('addnewcourse','CourseController@create')->name('addnewcourse');
Route::post('storecourse','CourseController@store')->name('storeCourse');
Route::get('editcourse/{id}','CourseController@edit')->name('editCourse');
Route::post('updatecourse','CourseController@update')->name('updateCourse');

/* Group Routs  Begin*/
Route::get('groups','GroupController@index')->name('listgroup');
Route::get('addnewgroup','GroupController@create')->name('addnewgroup');
Route::post('storegroup','GroupController@store')->name('storegroup');
Route::get('editgroup/{id}','GroupController@edit')->name('editgroup');
Route::post('updategroup','GroupController@update')->name('updategroup');
/* Group Routs  End*/



/* Delete Row From Table Start */
Route::get('/ajax/getStatenames/{id}','AjaxController@getStatenames');
Route::get('/ajax/getproductDetails/{id}','AjaxController@getproductDetails');
Route::get('/ajax/getRateAndGst/{id}','AjaxController@getRateAndGst');
Route::get('/ajax/addProductDropdown/{id}/{tr_id}','AjaxController@addProductDropdown');
Route::get('ajax/getCitynames/{id}','AjaxController@getCitynames');
Route::get('ajax/getLocationArea/{id}','AjaxController@getLocationArea');
Route::get('ajax/checkInvoice/{id}','AjaxController@checkInvoice');
Route::get('ajax/destroy/{name}/{id}','AjaxController@destroy');
Route::get('ajax/destroyByCustomColumn/{name}/{id}/{columnName}','AjaxController@destroyByCustomColumn');
 