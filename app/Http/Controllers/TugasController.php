<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $data_tugas = \App\Tugas::all();
        return view ('tugas.index',['data_tugas' => $data_tugas]);
    }

    public function create(Request $request)
    {
        \App\Tugas::create($request->all());
        return redirect('/Tugas')->with('sukses');
        
        
    }
}
