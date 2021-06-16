<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $data['result'] = \App\Kelas::all();
        return view('kelas/index')->with($data);
    }

    public function create(){
        return view('kelas/form');
    }

    public function store(Request $request){
        $input = $request->all();
        $status = \App\Kelas::create($input);

        return redirect('/');
    }
}
