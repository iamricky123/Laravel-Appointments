<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
	//It loads the form template in the view with the captcha element.
     public function index()
    {
        return view('index');
    }

	//Validates the entire form, including the captcha input field.
    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
    }

	//It refreshes the captcha code or text.
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
