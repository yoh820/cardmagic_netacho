<?php

if(isset($neta->url)===true)
{
    //youtubeURLが値としてある
    $youtube_url=$neta->url;

    if (strpos($youtube_url,"watch") === false){
        //短縮URL
        $start_str_no = strpos($youtube_url,"be/")+3;
        $str_int = strpos($youtube_url,"?si") - $start_str_no;
        $movie_iframe = "https://www.youtube.com/embed/".substr($youtube_url,$start_str_no,$str_int)."?si=_uAcAIsWUU_rl6Sp";
    }
    else
    {
        //URL直取り
        $start_str_no = strpos($youtube_url,"?v=")+3;
        $str_int = strpos($youtube_url,"&") - $start_str_no;
        $movie_iframe = "https://www.youtube.com/embed/".substr($youtube_url,$start_str_no,$str_int)."?si=_uAcAIsWUU_rl6Sp";
    }
}
else
{
    //youtubeURLが値としてない→movieファイルがある
    //assetが思った挙動を示さないから妥協して置換する
    $movie_iframe = str_replace('/public/','/storage/',asset($neta->movie_path));
}

?>


<h1 class="title">
    タイトル；{{ $neta->title }}
</h1>
<div class="content">
    <div class="created_at">
        日付：{{ $neta->created_at->format('Y年n月j日') }}
    </div>
    <div class="movie">
        <iframe width="560" height="315" src={{ $movie_iframe }} 
        title="url or movies" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        allowfullscreen></iframe>
    </div>
    <div class="body">
        説明：{{ $neta->body }}
    </div>
</div>