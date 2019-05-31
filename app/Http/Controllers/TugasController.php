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
}
