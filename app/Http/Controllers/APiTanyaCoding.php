<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\User;
use Faker\Provider\Lorem;
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
        $questions = Pertanyaan::latest()->get();
        foreach ($questions as $question) {
            $question->foto = url('storage/' . $question->foto);
        }

        return response()->json($questions);
    }

    public function show($id)
    {
        $data = Pertanyaan::find($id);
        return response()->json($data);
    }
}
