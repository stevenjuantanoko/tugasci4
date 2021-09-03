<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function page1()
    {
        return view('page/page1');
    }
    public function page2()
    {
        return view('page/page2');
    }
    public function page3()
    {
        return view('page/page3');
    }
    public function page4()
    {
        return view('page/page4');
    }
    public function page5()
    {
        return view('page/page5');
    }
}