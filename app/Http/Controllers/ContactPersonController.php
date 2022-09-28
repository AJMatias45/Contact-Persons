<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactPersons;

class ContactPersonController extends Controller
{
    public function index(){
        $contact = ContactPersons::all();
        return view('contactpersonspage', compact('contacts'));
    }
}
