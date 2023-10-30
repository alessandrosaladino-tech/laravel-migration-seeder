<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $latest_train = Train::orderByDesc('id')->take(4)->get();

        return view('welcome', compact('latest_train'));
    }

    public function trains()
    {
        $trains = Train::orderByDesc('id')->paginate(10);

        return view('trains', compact('trains'));
    }
}
