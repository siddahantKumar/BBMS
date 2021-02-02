<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bank extends Controller //  use for blood bank
{
    public function index() // DonorPages
    {
        return view('Donor and seeker/bloodbank/index');
    }
    public function donors() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/donors');
    }
    public function agents() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/agents');
    }
    public function pricing() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/pricing');
    }
    public function about_us() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/about_us');
    }

    public function testimonial() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/testimonial');
    }

    public function faq() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/faq');
    }
    public function blog() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/blog');
    }
    public function contact_us() // DonorPages
    {
        return view('Donor and seeker/bloodbank/page/contact_us');
    }

    // All pages relate to the blood grouups
    public function b1() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b1');
    }
    public function b2() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b2');
    }
    public function b3() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b3');
    }
    public function b4() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b4');
    }
    public function b5() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b5');
    }
    public function b6() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b6');
    }
    public function b7() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b7');
    }
    public function b8() // DonorPages
    {
        return view('Donor and seeker/bloodbank/blood-groupwise-result/b8');
    }

    //Pages relate to donors

    public function d3() // DonorPages
    {
        return view('Donor and seeker/bloodbank/donor/d3');
    }
    public function d4() // DonorPages
    {
        return view('Donor and seeker/bloodbank/donor/d4');
    }
    public function d5() // DonorPages
    {
        return view('Donor and seeker/bloodbank/donor/d5');
    }
    public function d6() // DonorPages
    {
        return view('Donor and seeker/bloodbank/donor/d6');
    }

    //For all agents

    public function a10() // DonorPages
    {
        return view('Donor and seeker/bloodbank/agent/a10');
    }
    public function a11() // DonorPages
    {
        return view('Donor and seeker/bloodbank/agent/a11');
    }
    public function a12() // DonorPages
    {
        return view('Donor and seeker/bloodbank/agent/a12');
    }
    public function a13() // DonorPages
    {
        return view('Donor and seeker/bloodbank/agent/a13');
    }

    public function a6() // DonorPages
    {
        return view('Donor and seeker/bloodbank/agent/a6');
    }

    //News information

    public function Abo() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/Abo');
    }
    public function Anti() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/Anti');
    }
    public function Antibody() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/Antibody');
    }
    public function Atype() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/Atype');
    }
    public function cold() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/cold');
    }
    public function direct() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/direct');
    }
    public function paro() // DonorPages
    {
        return view('Donor and seeker/bloodbank/news/paro');
    }

}
