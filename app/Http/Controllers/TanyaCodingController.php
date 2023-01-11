<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Pertanyaan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanyaCodingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function public()
    {
        // $dataUser = User::all();

        $dataPublic = Pertanyaan::get();
        // $dataWaktu = Carbon::parse($dataPublic->created_at);
        return view('main.dashboard', [
            'dataPublic' => $dataPublic,
            // 'dataWaktu' => $dataWaktu,
        ]);

        // var_dump($dataWaktu);
    }

    public function dashboardUser()
    {
        $user_id = Auth::user()->id;
        $dataAsk = Pertanyaan::where('user_id', $user_id)->get();

        return view('main.dashboardUser', [
            'dataAsk' => $dataAsk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $id)
    {
        //

        $dataShow = Pertanyaan::find($id)->first();
        $dataJwb = Answers::where('questions_id', $dataShow->id)->get();
        return view('question.detail', [
            'dataShow' => $dataShow,
            'dataJwb' => $dataJwb,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
