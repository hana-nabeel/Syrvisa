<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{

    public function showAllCategories(){
        $categories=Services::all();
        // dd($categories);
        return view('welcome',compact('categories'));
    }
}