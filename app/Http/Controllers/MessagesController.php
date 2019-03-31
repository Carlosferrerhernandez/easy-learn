<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageRecieved;
use Mail;
use Alert;
use Redirect;

class MessagesController extends Controller
{   
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $msg = $request->validate([
            'nombre' => 'required',
            'celular' => 'required',
            'mensaje' => 'required',
        ]);

        Mail::to('asesoriaseasylearn@gmail.com')->send(new MessageRecieved($msg));

        alert('Mensaje enviado satisfactoriamente!')->autoclose(3000);

        alert()->success('Mensaje enviado satisfactoriamente!', '')->autoClose(10000)->showCloseButton('aria-label');
            
        return Redirect::back();
    }

}
