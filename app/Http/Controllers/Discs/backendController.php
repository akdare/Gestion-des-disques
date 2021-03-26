<?php

namespace App\Http\Controllers\Discs;
use App\Models\Discs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{
    public function indexBackend() {
        $discs=Discs::all();
        return view('backend/listeDisques',compact('discs'));
    }
}
