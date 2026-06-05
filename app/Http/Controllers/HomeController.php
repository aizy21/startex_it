<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function index_view(){
        return view('home.pages.landing.index');
    }

    public function product_view($product_name){
        $view = 'home.pages.products.'.$product_name;

        if (View::exists($view)) {
            return view($view);
        }

        // View does not exist
        abort(404);

    }

    public function service_view(){
        return view('home.pages.services.index');
    }

    public function policy_view(){
        return view("home.pages.policy.index");
    }

    public function terms_view(){
        return view("home.pages.terms.index");
    }
}
