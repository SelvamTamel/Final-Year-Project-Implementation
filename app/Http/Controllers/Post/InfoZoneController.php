<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfoZonePost;

class InfoZoneController extends Controller
{
    public function displayinfozone()
    {
        $infozonepost = InfoZonePost::all();
         return view('post.infozone', compact('infozonepost')); 

    }
}
