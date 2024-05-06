<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MovieController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "movies" => Movie::all()
        ]);
    }

    public function seat($time, $id)
    {
        $currentTime = Carbon::now();
        return view('seat', [
            "title" => "Seat",
            "time" => "$time" . '.00',
            "date" => $currentTime->format('d M'),
            "seat" => [],
            "movie" => Movie::find($id)
        ]);
    }

    public function store(Request $request)
    {
        return $request;
    }
}
