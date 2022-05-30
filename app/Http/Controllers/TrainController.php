<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        // $trains = Train::
        // $trains = Train::where( 'departure_time', '>=', date("Y/m/d") )->get();
        $trains = Train::where('departure_time', '>', '13:00:00' )->get();

        return view('pages.trains.index', compact('trains'));
    }
}
