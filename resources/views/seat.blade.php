@extends('layouts.main')

@section('main')
    <div class="flex items-center justify-center flex-col">
        <h1 class="text-2xl font-bold text-indigo-500">{{ $movie->name }} ({{ $movie->studio_name }})</h1>
        <p class="text-lg">{{ $date }} <span class="mx-5">|</span> {{ $time }}</p>
    </div>
    <div class="grid grid-cols-2 gap-6 mt-5">
        <?php $i = "A" ?>
        @for($r = 0; $r < $movie->studio_capacity / 12; $r++)
            <div class="flex flex-wrap items-center justify-center gap-6">
                @for($c = 1; $c <= 6; $c++)
                <button class="bg-indigo-500 hover:bg-indigo-700 text-white p-3 rounded">
                    {{ $i }}0{{ $c }}
                </button>
                @endfor
            </div>
            <div class="flex flex-wrap items-center justify-center gap-6">
                @for($c = 7; $c <= 12; $c++)
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white rounded p-3">
                        {{ $i }}{{ ($c > 9 ? $c : '0' . $c) }}
                    </button>
                @endfor
            </div>
            <?php $i++; ?>
        @endfor
    </div>
@endsection