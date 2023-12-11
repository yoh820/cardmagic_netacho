<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿画面</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <x-app-layout>
    <body>
        <h1>投稿画面</h1>
        <form action="/posts_neta" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>ネタ名称</h2>
                <input type="text" name="neta[title]" placeholder="マジック名等"/>
            </div>
            <div class="movie_path">
                <h2>動画ファイル参照</h2>
                <input type="file" name="movie" placeholder="ABC.mp4"/>
            </div>
            <div class="url">
                <h2>YouTubeのURL</h2>
                <input type="text" name="neta[url]" placeholder="https://www.youtube.com/"/>
            </div>
            <div class="body">
                <h2>説明</h2>
                <textarea name="neta[body]" placeholder="ネタの説明"></textarea>
            </div>
            <div class="keyword">
                <h2>関連ワード</h2>
                <input type="text" name="neta[keyword]" placeholder="原案、プロット名"/>
            </div>
            <div class="public_private">
                <h2>公開・非公開</h2>
                <input type="text" name="neta[public_private]" placeholder="公開フラグ"/>
            </div>
            <div class="access_count">
                <h2>アクセス回数</h2>
                <input type="text" name="neta[access_count]" placeholder="アクセス回数"/>
            </div>
            <input type="submit" value="投稿"/>
        </form>
    </body>
    </x-app-layout>
</html>

