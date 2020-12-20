<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Inspiration;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    //
    public function index(){
        $inspiration = Inspiration::all()->first();
        $motivation = AboutUs::all()->first();
        return view('pages/apropos',
            array(
                "inspiration"=>$inspiration,
                "motivation"=>$motivation
            )
        );
    }
}
