<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PertanyaanController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('question.index');
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

        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'foto' => 'image|file|max:1024',
        ]);


        $validatedData = new Pertanyaan();

        $validatedData->user_id = Auth::user()->id;
        $validatedData->title = $request->title;
        $validatedData->body = $request->body;
        $validatedData['excp'] = Str::limit(strip_tags($request->body), 200);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('questions-images');
        }

        $validatedData->save();


        // Pertanyaan::create($validatedData);

        return redirect('/questions/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
        $dataShow = Pertanyaan::find($pertanyaan);
        return view('question.detail', [
            'dataShow' => $dataShow
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //

        if ($pertanyaan->foto) {
            Storage::delete($pertanyaan->foto);
        }

        Pertanyaan::destroy($pertanyaan->id);

        return redirect('/questions/user');
    }
}
