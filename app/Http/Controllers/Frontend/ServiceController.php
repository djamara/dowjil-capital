<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\IntroService;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //


    public function index(){

        $services = Service::all();
        $introduction = IntroService::all()->first();
        return view('pages/service',array('services'=>$services,'introduction'=>$introduction));
    }

    public function serviceDetail($id){
        $service = Service::where('service_id','=',$id)->first();

        return view('pages/serviceDetail',array('service'=>$service));
    }
}
