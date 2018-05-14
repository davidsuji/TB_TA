<?php

namespace App\Http\Controllers;

//use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\TugasAkhir;

class TugasAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $TugasAkhir = TugasAkhir::all()->toArray();
        return view('v1.index', compact('TugasAkhir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('v1.create');
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
        $TugasAkhir = $this->validate(request(), [
        'NIM' => 'required',
        'Nama_Mahasiswa' => 'required',
        'Jenis_Kelamin' => 'required',
        'Jurusan' => 'required',
        'Judul_TA' => 'required',
        'Dosen_Pembimbing' => 'required',
        'Gambar' => 'required',
        ]);

        $file = $request->file('Gambar');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('gambar'), $filename);

        $TugasAkhir['Gambar'] = $filename;

        TugasAkhir::create($TugasAkhir);
        return back()->with('success', 'Data TugasAkhir has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $TugasAkhir = TugasAkhir::find($id);
        return view('v1.edit',compact('TugasAkhir','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
