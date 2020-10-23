<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blogArticle()
    {
        return view('blog–article');
    }
    public function buySinglecredits()
    {
        return view('buy-single-credits');
    }
    public function Comingup()
    {
        return view('Comingup');
    }
    public function faqHelp()
    {
        return view('faq-help');
    }
    public function favorites()
    {
        return view('favorites');
    }
    public function formularioDos()
    {
        return view('formulario-dos');
    }
    public function formularioTres()
    {
        return view('formulario-tres');
    }
    public function formularioUno()
    {
        return view('formulario-uno');
    }
    public function  getluckybestMatches()
    {
        return view('get-lucky-best-matches');
    }
    public function  goonPhotofeed()
    {
        return view('go-on-photofeed');
    }
    public function  Gopremiumsuperpremiumhombres()
    {
        return view('Go-premium-super-premium-hombres');
    }
    public function  Gopremiumsuperpremiummujeres()
    {
        return view('Go-premium-super-premium-mujeres');
    }
    public function  howitworks()
    {
        return view('how-it-works');
    }
    public function  inbox()
    {
        return view('inbox');
    }
    public function  login()
    {
        return view('login');
    }
    public function  privacy()
    {
        return view('privacy');
    }
    public function  settings()
    {
        return view('settings');
    }
    public function  termsandconditions()
    {
        return view('terms-and-conditions');
    }
    public function  userprofileedit()
    {
        return view('user-profile-edit');
    }
    public function  userprofile()
    {
        return view('user-profile');
    }
    public function  validateuse()
    {
        return view('validate-use');
    }
    
    
}
