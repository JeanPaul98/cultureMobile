<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //A propos
    public function showAbout()
    {
        return view('pages.about');
    }

    //Contact
    public function showContact()
    {
        return view('pages.contact');
    }

    //Kiosque
    public function showKiosque()
    {
        return view('pages.kiosque');
    }

    //Faq
    public function showFaq()
    {
        return view('pages.faq');
    }

    //Liens Utiles
    public function showLink()
    {
        return view('pages.utiles');
    }

    //Inscription
    public function showIscription()
    {
        return view('pages.inscription');
    }
}
