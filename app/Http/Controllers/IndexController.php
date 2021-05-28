<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Events;

class IndexController extends Controller
{
    public function index()
    {

        return view ('index')->with([
            'data'=>Events::all()
        ]);
    
         
    }
}
