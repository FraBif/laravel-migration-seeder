<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trainData = Train::all();

        return view('home', compact('trainData'));
    }
}
