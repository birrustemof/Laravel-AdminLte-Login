<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //         DASHBOAARD

    public function index(){

        return view('dashboard.index');
    }

    public function index2(){

        return view('dashboard.index2');
    }
    public function index3(){
        return view ('dashboard.index3');
    }

    //           WIDGETS

    public function widgetsCards(){

        return view('widgets.cards');
    }

    public function widgetsInfoBox()
    {
        return view('widgets.info-box');
    }

    public function widgetsSmallBox()
    {
        return view('widgets.small-box');
    }

                //layoutlar
    public function layoutCollapsedSidebar()
    {
        return view('layout.collapsed-sidebar');
    }

    public function layoutFixedComplete()
    {
        return view('layout.fixed-complete');
    }

    public function layoutFixedFooter()
    {
        return view('layout.fixed-footer');
    }

    public function layoutFixedHeader()
    {
        return view('layout.fixed-header');
    }

    public function layoutFixedSidebar()
    {
        return view('layout.fixed-sidebar');
    }

    public function layoutCustomArea()
    {
        return view('layout.layout-custom-area');
    }

    public function layoutRtl()
    {
        return view('layout.layout-rtl');
    }

    public function layoutLogoSwitch()
    {
        return view('layout.logo-switch');
    }

    public function layoutSidebarMini()
    {
        return view('layout.sidebar-mini');
    }

    public function layoutUnfixedSidebar()
    {
        return view('layout.unfixed-sidebar');
    }




                   //DOCSLAR
    public function docsBrowserSupport()
    {
        return view('docs.browser-support');
    }

    public function docsMainHeader()
    {
        return view('docs.components.main-header');
    }

    public function docsMainSidebar()
    {
        return view('docs.components.main-sidebar');
    }

    public function docsTreeview()
    {
        return view('docs.javascript.treeview');
    }



    public function docsColorMode()
    {
        return view('docs.color-mode');
    }

    public function docsFaq()
    {
        return view('docs.faq');
    }

    public function docsHowToContribute()
    {
        return view('docs.how-to-contribute');
    }

    public function docsIntroduction()
    {
        return view('docs.introduction');
    }

    public function docsLayout()
    {
        return view('docs.layout');
    }

    public function docsLicense()
    {
        return view('docs.license');
    }



}



