<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PmController extends Controller
{
    public function index()
    {
    	$postType = 'PM2.5 細懸浮微粒指標';

    	$data = compact('postType');

    	return view('open.pm', $data);
    }
}
