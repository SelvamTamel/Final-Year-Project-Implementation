<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
   public function index()
   {
        $faq = Faq::all();
        return view('home.home', compact('faq')); 
   }
}
