<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machine;

class LabyController extends Controller
{
    public function index()
    {
        $Machines = Machine::all();
        return view('welcome')->with('Machines', $Machines);
    }
}
