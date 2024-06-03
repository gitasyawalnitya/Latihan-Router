<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\view\view;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return View
     */ 
    public function index(): View
    {
        return view ('post.index');
    }

}
