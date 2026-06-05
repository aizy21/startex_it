<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
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



    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'company' => 'required|string|max:150',
            'country' => 'required|string|max:100',
            'product' => 'nullable|string|max:200',
            'message' => 'nullable|string|max:1000',
        ]);

        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // Return validation errors as JSON with a 422 Unprocessable Entity status code
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }


        // return redirect()->back()->with('success', 'Your message has been sent successfully.');

        try {
            // Send email notification
            Mail::to('sync@startexmarketing.com')->send(new ContactMail($request->all()));
            // Mail::to('pk.harissultani@gmail.com')->send(new ContactMail($request->all()));

            // Return JSON success response on completion
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.'
            ], 200);

        } catch (\Exception $e) {
            // Handle unexpected mail server anomalies
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending your message. Please try again later.'
            ], 500);
        }
    }


}
