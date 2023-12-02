<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="title">
                        タイトル；{{ $neta->title }}
                    </h1>
                    <div class="content">
                        <div class="created_at">
                            日付：{{ $neta->created_at->format('Y年n月j日') }}
                        </div>
                        <div class="body">
                            説明：{{ $neta->body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>