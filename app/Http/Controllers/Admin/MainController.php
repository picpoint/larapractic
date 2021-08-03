<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{

    public function index() {
        $title = "Admin page";

        $tag = new Tag();
        $tag->title = 'корова му му';
        $tag->save();

        return view('admin.index', compact('title'));
    }

}
