<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      
        return view('photos');
    }

}
