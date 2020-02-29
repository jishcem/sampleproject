<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactSend(Request $request) {
        dd($request->all());
    }
}
