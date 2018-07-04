<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\JudulTA;
use App\Dosen;
use Auth;
use storage;

class JudulTAController extends Controller
{
    

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
        $JudulTA = JudulTA::all()->toArray();
        return view('judulTa.index', compact('JudulTA'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $NIM = auth()->user()->username;
        $Mahasiswa = DB::table('Mahasiswas')->where('NIM',$NIM)->first();

        if ($Mahasiswa->IPK >= 2.6 && $Mahasiswa->Jumlah_SKS >= 110) {
            $Dosen = Dosen::all()->toArray();
            return view('judulTa.create_judulta', compact('Dosen'));
        }else{
           return redirect('home');
        }
        
        //return view('judulTa.create_judulta',['Mahasiswas'=>$Mahasiswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $JudulTA = $this->validate(request(),
        [
          'NIM'=>'required',
          'JudulTA'=>'required|string|max:40',
          'NIP'=>'required',
        ]);

        JudulTA::create($JudulTA);

        return redirect('judulTa')->with('success','Data has been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
