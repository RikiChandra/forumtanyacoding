<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\User;
use Illuminate\Http\Request;

class APiTanyaCoding extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function questions()
    {
        $questions = Pertanyaan::all();
        return response()->json($questions);
    }
}
