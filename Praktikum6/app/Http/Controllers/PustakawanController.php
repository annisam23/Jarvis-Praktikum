<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index()
    {
        $data = [
            "name" => "Nisa",
            "gender" => "P",
            "shift" => "Malam"
        ];

        return response()->json($data);
    }
}
//http://127.0.0.1:8000/api/
