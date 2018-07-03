<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Dosen;
use storage;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Dosen = Dosen::all()->toArray();
      return view('dosen.index', compact('Dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create_dosen');
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
        $Dosen = $this->validate(request(),
        [
          'NIP'=>'required',
          'Nama_Dosen'=>'required|string|max:40',
          'Jurusan'=>'required',
          'Bidang_Keahlian'=>'required' ,
          'No_Hp'=>'required' ,
          'Email' => 'required',
        ]);
        $password = "123456";
        Dosen::create($Dosen);
        User::create([
            'name' => $Dosen['Nama_Dosen'],
            'email' => $Dosen['Email'],
            'username' => $Dosen['NIP'],
            'password' => Hash::make($password),
        ]);

        return back()->with('success', 'Data Dosen has been added');
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
        $Dosen = Dosen::find($id);
        return view('dosen.edit_dosen',compact('Dosen','id'));
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
        $Dosen = Dosen::find($id);
        $this->validate(request(), 
        [
        'NIP' => 'required',
        'Nama_Dosen' => 'required',        
        'Jurusan' => 'required',
        'Bidang_Keahlian' => 'request',
        'No_Hp' => 'required',
        ]);

        $Dosen->NIP = $request->get('NIP');
        $Dosen->Nama_Dosen = $request->get('Nama_Dosen');        
        $Dosen->Jurusan = $request->get('Jurusan');
        $Dosen->Bidang_Keahlian = $request->get('Bidang_Keahlian');
        $Dosen->No_Hp = $request->get('No_Hp');        

        $Dosen->save();
        return redirect('Dosen')->with('success','Data has been updated');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Dosen = Dosen::find($id);
        $Dosen->delete();
        return redirect('Dosen')->with('success','Data has been deleted');
    }
}
