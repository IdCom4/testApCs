<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    
    function index() {}

    function send(Request $request) {
      $this->validate($request, [
        "nom" => "required",
        "mail" => "required|email",
        "tel" => "required|regex:/[0-9]{10}/",
        "personnes" => "required|numeric|min:0",
        "jour" => "required|date",
      ]);

      $data = array(
        "nom" => $request->nom,
        "mail" => $request->mail,
        "sujet" => $request->sujet,
        "tel" => $request->tel,
        "personnes" => $request->personnes,
        "jour" => $request->jour,
        "message" => $request->message,
      );

      Mail::to("reservations@au-petit-chez-soi.fr")->send(new SendMail($data));
      
      return (back()->with("success", "Le mail à bien été envoyé !"));
    }
}
