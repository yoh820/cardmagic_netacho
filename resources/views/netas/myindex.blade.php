<?php
    
    //ログインユーザーのidを変数に格納する
    $user_id = Auth::id();

?>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>投稿一覧</h1>
                    <div class='netas'>
                        @foreach ($netas as $neta)
                            @if ($user_id === $neta->user_id)
                                <div class='neta'>
                                    <a href="/netas/{{ $neta->id }}">{{ $neta->title }}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>