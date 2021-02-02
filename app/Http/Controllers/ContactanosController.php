<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos');
    }

    public function store (Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());

        /* Mail::to('det_27_de18@bue.edu.ar')->send($correo); */
        Mail::to('nestorm92@gmail.com')->send($correo);

        return redirect()->route('index')->with('msg','send');
    }

    public function oastore (Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());

        /* Mail::to('oficinadealumnoset27de18@gmail.com')->send($correo); */
        Mail::to('nestorm92@gmail.com')->send($correo);

        return redirect()->route('index')->with('msg','send');
    }
}
