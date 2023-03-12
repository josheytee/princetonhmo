<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
    public function individual()
    {
        return view('front.plans');
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

    public function cart(Request $request)
    {
        $plan = $request->input('plan');
        $type = $request->input('type');

        $hPlan = Plan::where('name', $plan)->where('type', $type)->first();
        if ($hPlan != null) {
            $items =  [$hPlan];
            return view('front.cart', compact("items"));
        }

        return redirect()->route('pages.individual');
    }

    public function cartCollector(Request $request)
    {
        $input = $request->only(['items', 'total']);

        $request->session()->put('cart', $input);
        return redirect()->route('pages.checkout');
    }

    public function checkout(Request $request)
    {
        if (!$request->session()->has('cart')) {
            return redirect()->route('pages.individual');
        }
        $cart = $request->session()->get('cart');

        return view('front.checkout', compact('cart'));
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
    public function faq()
    {
        return view('front.faq');
    }
}
