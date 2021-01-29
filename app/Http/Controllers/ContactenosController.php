<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactenosMailable;
use Illuminate\Support\Facades\Mail;

class ContactenosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store (Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $correo = new ContactenosMailable($request->all());

        Mail::to('det_27_de18@bue.edu.ar')->send($correo);

        return redirect()->route('index')->with('msg','send');
    }

    public function oastore (Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $correo = new ContactenosMailable($request->all());

        Mail::to('oficinadealumnoset27de18@gmail.com')->send($correo);

        return redirect()->route('index')->with('msg','send');
    }
}
