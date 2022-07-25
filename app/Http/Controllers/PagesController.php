<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
    }
    public function board()
    {
        return view('front.board');
    }
    public function team()
    {
        return view('front.team');
    }
    public function plans()
    {
        return view('front.plans');
    }
    public function corporate()
    {
        return view('front.corporate');
    }
    public function aged()
    {
        return view('front.aged');
    }
    public function enrollee()
    {
        return view('front.enrollee');
    }
    public function buy()
    {
        return view('front.buy');
    }
    public function quote()
    {
        return view('front.quote');
    }
    public function cart()
    {
        return view('front.cart');
    }
    public function resources()
    {
        return redirect()->route('pages.provider');
        // return view('front.resources');
    }
    public function benefits()
    {
        return view('front.benefits');
    }
    public function provider()
    {
        return view('front.provider');
    }
    public function providers()
    {
        return view('front.providers');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
