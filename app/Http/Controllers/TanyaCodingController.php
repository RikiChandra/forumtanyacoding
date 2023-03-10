<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Pertanyaan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

        $dataPublic = Pertanyaan::latest()->get();
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
        $dataAsk = Pertanyaan::latest()->where('user_id', $user_id)->get();

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

    public function detail($id)
    {
        $totalJwb = Pertanyaan::select('answers_count')->where('id', $id)->value('answers_count');
        $dataShow = Pertanyaan::find($id);
        $dataJwb = Answers::where('questions_id', $dataShow->id)->get();
        return view('question_user.detail', [
            'dataShow' => $dataShow,
            'dataJwb' => $dataJwb,
            'totalJwb' => $totalJwb,
        ]);
    }




    public function show($id)
    {
        //
        $totalJwb = Pertanyaan::select('answers_count')->where('id', $id)->value('answers_count');
        $dataShow = Pertanyaan::find($id);
        $dataJwb = Answers::where('questions_id', $dataShow->id)->get();
        return view('question.detail', [
            'dataShow' => $dataShow,
            'dataJwb' => $dataJwb,
            'totalJwb' => $totalJwb,
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
        $dataPert = Pertanyaan::where('id', $id)->first();
        return view('question_user.edit', [
            'dataPert' => $dataPert
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $tanya)
    {
        //

        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'foto' => 'image|file|max:1024',
        ]);

        $validatedData['excp'] = Str::limit(strip_tags($request->body), 200);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->store('questions-images');
        }

        $tanya->update($validatedData);

        return redirect('/questions/user');
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
