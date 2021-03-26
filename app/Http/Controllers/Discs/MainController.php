<?php

namespace App\Http\Controllers\Discs;
use App\Models\Discs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $discs=Discs::all();
        return view('welcome',compact('discs'));
    }

}
