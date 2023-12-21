<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neta;
use Illuminate\Support\Facades\Auth;


class NetaController extends Controller
{
    public function show(Neta $neta)
    {

        if ($neta->user_id === Auth::id())
        {
            //投稿したユーザーが閲覧しているため、アクセスとみなさずにカウントも増やさない
        }
        else
        {
            //投稿者ではないユーザーが閲覧しているため、アクセスとみなしカウントする
            $now_count = $neta->access_count;
            $neta->access_count = $now_count + 1;
            $neta->save();
        }
        
        return view('netas.show')->with(['neta' => $neta]);
    }
    
    //
}
