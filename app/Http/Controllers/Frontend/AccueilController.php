<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Clientcomment;
use App\Models\InformationGenerale;
use App\Models\Inspiration;
use App\Models\IntroService;
use App\Models\Presentation;
use App\Models\Service;
use App\Models\Slideaccueil;
use App\Models\Specialite;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function index(){
        $infoGeneral  = InformationGenerale::all();
        $slide = Slideaccueil::all();
        $presentation = Presentation::all()->first();
        $inspiration = Inspiration::all()->first();
        $service = Service::all();
        $specialites = Specialite::all();
        $clients = Clientcomment::all();
        $introduction = IntroService::all()->first();


        return view('pages/accueil')->with([
            'info',$infoGeneral,
            'slides'=>$slide,
            'presentation'=>$presentation,
            'inspiration'=>$inspiration,
            'service'=>$service,
            'specialites'=>$specialites,
            'clients'=>$clients,
            'introduction'=>$introduction
        ]);
    }
}
