<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neta;


class NetaController extends Controller
{
    public function show(Neta $neta)
    {
        return view('netas.show')->with(['neta' => $neta]);
    }
    
    //
}
