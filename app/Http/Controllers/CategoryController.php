<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function show($lug) {
        return view('categories.show');
    }


}
