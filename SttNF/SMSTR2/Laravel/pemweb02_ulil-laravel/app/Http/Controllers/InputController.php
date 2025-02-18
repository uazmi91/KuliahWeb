<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function output(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jk' => $request->input('jk'),
            'skill' => $request->input('skill')
            // 'skill' => $request->input('skill')
        ];
        return view('output', compact('data'));
    }
}
