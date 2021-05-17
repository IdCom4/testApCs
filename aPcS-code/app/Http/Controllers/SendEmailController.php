<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    //
    
    function index() {}

    function send(Request $request) {
      $this->validate($request, [
        "name" => "required",
        "mail" => "required|email",
        "subject" => "required",
        "message" => "required"
      ]);
    }
}
