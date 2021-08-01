<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        $title = "Admin page";

        return view('admin.index', compact('title'));
    }

}
