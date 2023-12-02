<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Neta;


class PostController extends Controller
{
    
    public function myindex(Neta $neta)
    {
        return view('netas.myindex')->with(['netas' => $neta::orderBy('created_at', 'DESC')->get()]);
    }
    
    public function neta_store(Request $request, Neta $neta)
    {
        $input = $request['neta'];
        $neta->fill($input)->save();
        return redirect('/myindex');    
    }
    
}
