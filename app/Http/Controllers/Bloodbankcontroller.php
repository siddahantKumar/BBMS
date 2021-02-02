<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Seeker;

class Bloodbankcontroller extends Controller
{
    public function Admin()
    {
    	return view('Donor and seeker/Adminlogin');
    }

    public function Navbar()
    {
    	return view('Donor and seeker/Navbar');
    }

    public function group()
    {
        return view('Donor and seeker/bloodgroup');
    }

    public function Donors() // DonorPages
    {
        return view('Donor and seeker/Donors');
    }



    public function RegisterD()
    {
        return view('Donor and seeker/RegistrationD');
    }

    public function RegisterS()
    {
        return view('Donor and seeker/RegistrationS');
    }

    public function index_2() // Admin panel
    {
        return view('Admin panel/index_2');
    }

    public function page() // Admin panel
    {
        return view('Admin panel/page');
    }

    public function bloodgroup() // Admin panel
    {
        return view('Admin panel/bloodgroup');
    }

    public function Menu() // Admin panel
    {
        return view('Admin panel/Menu');
    }

    public function Pricing() // Admin panel
    {
        return view('Admin panel/pricing');
    }

    public function SocialMedia() // Admin panel
    {
        return view('Admin panel/SocialMedia');
    }

    public function Subscriber() // Admin panel
    {
        return view('Admin panel/subscriber');
    }

    public function FAQ() // Admin panel
    {
        return view('Admin panel/FAQ');
    }

    public function Testimonial() // Admin panel
    {
        return view('Admin panel/Testimonial');
    }

    public function News() // Admin panel
    {
        return view('Admin panel/News');
    }

    public function Donor() // Admin panel
    {
        return view('Admin panel/Donorsection');
    }

    public function category() // Admin panel
    {
        return view('Admin panel/category');
    }

    public function faqsection() // Admin panel
    {
        return view('Admin panel/faqsection');
    }

    public function faqcategory() // Admin panel
    {
        return view('Admin panel/faqcategory ');
    }

   /* public function Agent() // Admin panel
    {
        return view('Admin panel/Agentsection');
    }*/

    public function setting() // Admin panel
    {
        return view('Admin panel/setting');
    }

    public function file() // Admin panel
    {
        return view('Admin panel/fileupload');
    }

    public function allagents() // Admin panel
    {
        return view('Admin panel/allagents');
    }

    public function seeker() // Admin panel
    {
        $seekers = Seeker::all();
        return view('Admin panel/seeker',compact('seekers'));
    }

    public function Agentpayment() // Admin panel
    {
        return view('Admin panel/Agentpayment');
    }

     public function pendingdonor() // Admin panel
    {

        $donors = Donor::all(); //this is what we getting all data from donor table
        return view('Admin panel/pendingdonor',compact('donors'));//and here we pass all our data in $donors
    }

    public function approvedonor() // Admin panel
    {
        return view('Admin panel/approvedonor');
    }

    public function Religion() // Admin panel
    {
        return view('Admin panel/Religion');
    }

    public function newss() // Admin panel
    {
        return view('Admin panel/newss');
    }

    public function comments() // Admin panel
    {
        return view('Admin panel/comments');
    }





//function for donor registration
    public function storeD(Request $request){

        $this->validate($request,[
        'user_name'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'password'=>'required',
        'newpassword'=>'required',
        'blood'=>'required',
        'age'=>'required',
        'choose'=> 'required'
        ]);

    $donor = new Donor;
         $donor->username = $request->user_name;
         $donor->Address = $request->address;
         $donor->Mobile_no = $request->phone;
         $donor->Email = $request->email;
         $donor->pass = $request->password;
         $donor->confirmpass = $request->newpassword;
         $donor->bloodg = $request->blood;
         $donor->age = $request->age;
         $donor->age=$request->gender;
         $donor->save();
         return redirect(route('Admin'))->with('successMsg','Donor Added succesfully');

    }

    //function for donor registration
    public function storeS(Request $request){

        $this->validate($request,[
        'user_name'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'password'=>'required',
        'newpassword'=>'required',
        'blood'=>'required',
        'age'=>'required',
        'choose'=> 'required'
        ]);

    $seeker = new Seeker;
         $seeker->username = $request->user_name;
         $seeker->Address = $request->address;
         $seeker->Mobile_no = $request->phone;
         $seeker->Email = $request->email;
         $seeker->pass = $request->password;
         $seeker->confirmpass = $request->newpassword;
         $seeker->bloodg = $request->blood;
         $seeker->age = $request->age;
         $seeker->age=$request->gender;
         $seeker->save();
         return redirect(route('Admin'))->with('successMsg','Donor Added succesfully');

    }

    public function edit($id)
    {

       $seeker = Seeker::find($id);
       return view('edit',compact('seeker'));
    }
}
