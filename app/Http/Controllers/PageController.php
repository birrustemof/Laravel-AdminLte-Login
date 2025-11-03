<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Ana səhifələr

public function __construct()
{
$this->middleware('auth');
}

    public function welcome()
    {
        return view('welcome');
    }

    // Examples səhifələri
    public function examplesLockscreen()
    {
        return view('examples.lockscreen');
    }

    public function examplesLogin()
    {
        return view('examples.login');
    }

    public function examplesLoginV2()
    {
        return view('examples.login-v2');
    }

    public function examplesRegister()
    {
        return view('examples.register');
    }

    public function examplesRegisterV2()
    {
        return view('examples.register-v2');
    }

    // Forms səhifələri
    public function formsGeneral()
    {
        return view('forms.general');
    }

    // Generate səhifələri
    public function generateTheme()
    {
        return view('generate.theme');
    }






    // Tables səhifələri
    public function tablesSimple()
    {
        return view('tables.simple');
    }

    // UI səhifələri
    public function uiGeneral()
    {
        return view('UI.general');
    }

    public function uiIcons()
    {
        return view('UI.icons');
    }

    public function uiTimeline()
    {
        return view('UI.timeline');
    }

    // Widgets səhifələri
    public function widgetsSmallBox()
    {
        return view('widgets.small-box');
    }









}
