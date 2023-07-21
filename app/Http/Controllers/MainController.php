<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Computer;

class MainController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('welcome', compact('computers'));
    }
}
