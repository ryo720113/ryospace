<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PsiController extends Controller
{
    public function index()
    {
    	$postType = '空汙指標';

    	$data = compact('postType');

    	return view('open.psi', $data);
    }
}
