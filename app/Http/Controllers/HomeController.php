<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaggio;

class HomeController extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        // $data = [
        //     "viaggi" => []
        // ]
        return view('home', compact('viaggi'));
    }
}
