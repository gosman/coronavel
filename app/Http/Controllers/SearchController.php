<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request)
    {

        $data = [
            'search' => $request->q,
        ];

        return view('index')->with($data);
    }

}
