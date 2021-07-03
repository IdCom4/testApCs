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

      /*$data = array(
        "nom" => "De: " . $request->nom,
        "mail" => "\nAdresse Mail: " . $request->mail,
        "tel" => "\nTel: " . $request->tel,
        "personnes" => "\nNombre de personnes: " . $request->personnes,
        "jour" => "\nLe: " . $request->jour,
        "message" => "\n\n" . $request->message,
      );

      if (mail("reservations@au-petit-chez-soi.fr", "Mail de réservation", $data["nom"] . $data["mail"] . $data["tel"] . $data["personnes"] . $data["jour"] . $data["message"]))
        echo ("Mail envoyé");
      else
        echo ("Erreur lors de l'envoie du mail");*/

      try {
        Mail::to("reservations@au-petit-chez-soi.fr")->send(new SendMail($data));
      } catch(\Exception $e) {
        return (back()->withErrors(["Notre serveur est surchargé, votre demande n'a pas pu être envoyée.", "Veuillez réessayer plus tard ou nous contacter directement."]));
      }

      return (back()->with("success", "Le mail à bien été envoyé !"));
    }
}
