<?php

namespace App\Http\Controllers;

//use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mahasiswa;
use storage;

class MahasiswaController extends Controller
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
        $Mahasiswa = Mahasiswa::all()->toArray();
        return view('mahasiswa.index', compact('Mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create_mahasiswa');
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
        $Mahasiswa = $this->validate(request(),
        [
        'NIM' => 'required',
        'Nama_Mahasiswa' => 'required',
        'Jenis_Kelamin' => 'required',
        'Alamat' => 'required|string|max:100',
        'Fakultas' => 'required',        
        'Jurusan' => 'required',
        'IPK' => 'required',
        'Jumlah_SKS' => 'required',
        'Judul_TA' => 'required',
        'No_Hp' => 'required',
        'Gambar' => 'required|image|max:500|mimes:jpeg,jpg,png,gif',        
        ]);

        $file = $request->file('Gambar');
        $filename = $file->getClientOriginalExtension();
        $file->move(public_path('gambar'), $filename);

        Mahasiswa::create($Mahasiswa);
        return back()->with('success', 'Data Mahasiswa has been added');
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
        $Mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('Mahasiswa','id'));
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
        $Mahasiswa = Mahasiswa::find($id);
        $this->validate(request(), 
        [
        'NIM' => 'required',
        'Nama_Mahasiswa' => 'required',
        'Jenis_Kelamin' => 'required',
        'Jurusan' => 'required',                
        'Gambar' => 'required|image|max:500|mimes:jpeg,jpg,png,gif',
        ]);

        $Mahasiswa->NIM = $request->get('NIM');
        $Mahasiswa->Nama_Mahasiswa = $request->get('Nama_Mahasiswa');
        $Mahasiswa->Jenis_Kelamin = $request->get('Jenis_Kelamin');
        $Mahasiswa->Alamat = $request->get('Alamat');
        $Mahasiswa->Fakultas = $request->get('Fakultas');
        $Mahasiswa->Jurusan = $request->get('Jurusan');
        $Mahasiswa->IPK = $request->get('IPK');
        $Mahasiswa->Jumlah_SKS = $request->get('Jumlah_SKS');        
        $Mahasiswa->No_Hp = $request->get('No_Hp');        

        $file = $request->file('Gambar');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        
        $Mahasiswa->Gambar = $filename;
        $Mahasiswa->save();
        return redirect('mahasiswa')->with('success','Data has been updated');    
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->delete();
        return redirect('mahasiswa')->with('success','Data has been deleted');
    }
}
