<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Neta;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function top(Neta $neta)
    {
        return view('netas.top')->with(['netas' => $neta->get()]);
    }
    
    public function myindex(Neta $neta)
    {
        return view('netas.myindex')->with(['netas' => $neta::orderBy('created_at', 'DESC')->get()]);
    }
    
    public function neta_store(Request $request, Neta $neta)
    {
        $input = $request['neta'];
        $neta->fill($input);
        
        $neta->user_id = Auth::id();
        
        $movie=$request->file('movie');
        if(isset($movie)===true)
        {
            $path=$movie->store('public');
            $neta->movie_path = $path;   
        }
        
        
        $neta->save();
        return redirect('/myindex');    
    }
    
}
