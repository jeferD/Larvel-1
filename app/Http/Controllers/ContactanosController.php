<?php

namespace App\Http\Controllers;

use App\Mail\ContactameMailable;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    public function store(){
        $correo = new ContactanosMailable;
        Mail::to('jefersondelgado0918@gmail.com')->send($correo);
    
        return view('contactanos.index');
    }    
}
