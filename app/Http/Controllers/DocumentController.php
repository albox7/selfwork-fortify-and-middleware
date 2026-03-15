<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class DocumentController extends Controller
{

    public function Documenti()
    {
        return view('documenti');
    }
}
