<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen()
    {
    	$data_dosen = \App\Dosen::all();
    	return view('Dosen.pagedosen', ['data_dosen' => $data_dosen]);
    }
}
