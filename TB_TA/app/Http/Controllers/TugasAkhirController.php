<?php

namespace App\Http\Controllers;

//use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\TugasAkhir;
use storage;

class TugasAkhirController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        'Gambar' => 'required|image|max:500|mimes:jpeg,jpg,png,gif',
        ]);

        $file = $request->file('Gambar');
        $filename = $file->getClientOriginalExtension();
        $file->move(public_path('gambar'), $filename);

        TugasAkhir::create($TugasAkhir);
        return back()->with('success', 'Data TugasAkhir has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
        $TugasAkhir = TugasAkhir::find($id);
        $this->validate(request(), 
        [
        'NIM' => 'required',
        'Nama_Mahasiswa' => 'required',
        'Jenis_Kelamin' => 'required',
        'Jurusan' => 'required',
        'Judul_TA' => 'required',
        'Dosen_Pembimbing' => 'required',
        'Gambar' => 'required|image|max:500|mimes:jpeg,jpg,png,gif',
        ]
    );

        $TugasAkhir->NIM = $request->get('NIM');
        $TugasAkhir->Nama_Mahasiswa = $request->get('Nama_Mahasiswa');
        $TugasAkhir->Jenis_Kelamin = $request->get('Jenis_Kelamin');
        $TugasAkhir->Jurusan = $request->get('Jurusan');
        $TugasAkhir->Judul_TA = $request->get('Judul_TA');
        $TugasAkhir->Dosen_Pembimbing = $request->get('Dosen_Pembimbing');

        $file = $request->file('Gambar');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        
        $TugasAkhir->Gambar = $filename;
        $TugasAkhir->save();
        return redirect('v1')->with('success','Data has been updated');         
        }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TugasAkhir = TugasAkhir::find($id);
        $TugasAkhir->delete();
        return redirect('v1')->with('success','Data has been deleted');
    }
}
