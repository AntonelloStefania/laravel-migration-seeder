<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;
use App\Models\Passenger;


class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        $passengers = Passenger::all();
        return view('home', compact('trains','passengers'));
    }
}
