<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value='')
    {
    	return view('home');
    }
    public function about($value='')
    {
    	return view('about');
    }
    public function contact($value='')
    {
    	return view('contact');
    }
    public function books($value='')
    {
    	return view('books');
    }
    public function action($value='')
    {
    	return view('action');
    }
    public function newarrivel($value='')
    {
    	return view('newarrivel');
    }
    public function classic($value='')
    {
    	return view('classic');
    }
    public function education($value='')
    {
    	return view('education');
    }
    public function free($value='')
    {
    	return view('free');
    }
    public function funny($value='')
    {
    	return view('funny');
    }
    public function horror($value='')
    {
    	return view('horror');
    }
    public function romance($value='')
    {
    	return view('romance');
    }
    public function knowledge($value='')
    {
    	return view('knowledge');
    }
}

