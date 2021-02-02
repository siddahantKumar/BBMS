<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Bloodbankcontroller@Admin')->name('Admin');

Route::get('/nav','Bloodbankcontroller@Navbar');
Route::get('/blood','Bloodbankcontroller@group');
Route::get('/Donor','Bloodbankcontroller@Donors');
Route::get('/index','Bloodbankcontroller@index_2')->name('index');
Route::get('/page','Bloodbankcontroller@page')->name('page');
Route::get('/blood','Bloodbankcontroller@bloodgroup')->name('blood');
Route::get('/Menu','Bloodbankcontroller@Menu')->name('Menu');
Route::get('/price','Bloodbankcontroller@Pricing')->name('price');
Route::get('/social','Bloodbankcontroller@SocialMedia')->name('social');
Route::get('/sub','Bloodbankcontroller@Subscriber')->name('sub');
Route::get('/faq','Bloodbankcontroller@FAQ')->name('faq');
Route::get('/test','Bloodbankcontroller@Testimonial')->name('test');
Route::get('/new','Bloodbankcontroller@News')->name('new');
Route::get('/don','Bloodbankcontroller@Donor')->name('don');
Route::get('/agent','Bloodbankcontroller@Agent')->name('agent');
Route::get('/set','Bloodbankcontroller@setting')->name('set');
Route::get('/file','Bloodbankcontroller@file')->name('file');
Route::get('/AllA','Bloodbankcontroller@allagents')->name('AllA');
Route::get('/sek','Bloodbankcontroller@seeker')->name('sek');
Route::get('/payment','Bloodbankcontroller@Agentpayment')->name('payment');
Route::get('/pending','Bloodbankcontroller@pendingdonor')->name('pending');
Route::get('/approve','Bloodbankcontroller@approvedonor')->name('approve');
Route::get('/Rel','Bloodbankcontroller@Religion')->name('Rel');
Route::get('/cat','Bloodbankcontroller@category')->name('cat');
Route::get('/new','Bloodbankcontroller@newss')->name('new');
Route::get('/com','Bloodbankcontroller@comments')->name('com');
Route::get('/faqc','Bloodbankcontroller@faqcategory')->name('faqc');
Route::get('/faqs','Bloodbankcontroller@faqsection')->name('faqs');

Route::get('/RegS','Bloodbankcontroller@RegisterS')->name('RegS');
Route::get('/RegD','Bloodbankcontroller@RegisterD')->name('RegD');
Route::post('/RegD','Bloodbankcontroller@storeD')->name('storeD');
Route::post('/RegS','Bloodbankcontroller@storeS')->name('storeS');
Route::get('/RegD','Bloodbankcontroller@RegisterD')->name('RegD');
Route::get('/edit/{id}','Bloodbankcontroller@edit')->name('edit'); // edit doing on the basis of id
Route::post('/update/{id}','Bloodbankcontroller@update')->name('update');


// All route use for blood bank

Route::get('/in','Bank@index')->name('in');
Route::get('/ind','Bank@index1')->name('ind');
Route::get('/don','Bank@donors')->name('don');
Route::get('/agen','Bank@agents')->name('agen');
Route::get('/pri','Bank@pricing')->name('pri');
Route::get('/abo','Bank@about_us')->name('abo');
Route::get('/test','Bank@testimonial')->name('test');
Route::get('/fa','Bank@faq')->name('fa');
Route::get('/blo','Bank@blog')->name('blo');
Route::get('/contact','Bank@contact_us')->name('contact');

Route::get('/b_1','Bank@b1')->name('b_1'); // these all pages are relate to blood groups
Route::get('/b_2','Bank@b2')->name('b_2');
Route::get('/b_3','Bank@b3')->name('b_3');
Route::get('/b_4','Bank@b4')->name('b_4');
Route::get('/b_5','Bank@b5')->name('b_5');
Route::get('/b_6','Bank@b6')->name('b_6');
Route::get('/b_7','Bank@b7')->name('b_7');
Route::get('/b_8','Bank@b8')->name('b_8');

//These all pages all relate to donar information 
Route::get('/d_3','Bank@d3')->name('d_3');
Route::get('/d_4','Bank@d4')->name('d_4');
Route::get('/d_5','Bank@d5')->name('d_5');
Route::get('/d_6','Bank@d6')->name('d_6');

//Agents information

Route::get('/a_6','Bank@a6')->name('a_6');
Route::get('/a_10','Bank@a10')->name('a_10');
Route::get('/a_11','Bank@a11')->name('a_11');
Route::get('/a_12','Bank@a12')->name('a_12');
Route::get('/a_13','Bank@a13')->name('a_13');

//Routes of news

Route::get('/ab','Bank@Abo')->name('ab');
Route::get('/an','Bank@Anti')->name('an');
Route::get('/anb','Bank@Antibody')->name('anb');
Route::get('/atype','Bank@Atype')->name('atype');
Route::get('/co','Bank@cold')->name('co');
Route::get('di/','Bank@direct')->name('di');
Route::get('/pa','Bank@paro')->name('pa');



/*Route::get('/', function () {
    return view('welcome');*/

