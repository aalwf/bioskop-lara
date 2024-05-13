@extends('layouts.main')

@section('main')
    <!-- component -->
    <div class="grid gap-6 lg:grid-cols-3 md:grid-cols-2">
    
        @foreach ($movies as $movie)
        <div class="bg-gray-100 dark:bg-gray-900 shadow shadow-gray-300 dark:shadow-gray-800 my-5 flex gap-4 rounded group">
            <div class="w-32 bg-cover bg-no-repeat bg-center rounded-l rounded-r-3xl shadow-lg dark:border-r-2 dark:border-indigo-500" style="background-image: url({{ asset('storage/movies/' . $movie->image) }})"></div>
            <div class="p-3 text-gray-700 dark:text-gray-300 w-8/12">
                <h1 class="text-xl truncate font-bold group-hover:text-indigo-500">{{ $movie->name }}</h1>
                <div class="grid grid-cols-2 mt-2 gap-17">
                    <ul class="text-gray-500 dark:text-gray-400 leading-5">
                        <li>Studio</li>
                        <li>Genre</li>
                        <li>Duration</li>
                        <li>Director</li>
                    </ul>
                    <ul class="text-gray-800 dark:text-gray-100 leading-5 justify-items-end">
                        <li>{{ $movie->studio_name }} <span class="text-indigo-500">({{ $movie->studio_capacity }})</span></li>
                        <li>{{ $movie->genre->name }}</li>
                        <li>{{ $movie->minutes }}</li>
                        <li>{{ $movie->director }}</li>
                    </ul>
                </div>
                <hr class="my-2 dark:border-slate-500">
                <div class="flex justify-between">
                    <a href="/seat/10/{{ $movie->id }}" class="bg-gray-200 p-1 rounded text-sm shadow-md text-indigo-600 hover:bg-indigo-400 hover:text-gray-100 hover:cursor-pointer dark:bg-gray-800">10.00</a>
                    <a href="/seat/13/{{ $movie->id }}" class="bg-gray-200 p-1 rounded text-sm shadow-md text-indigo-600 hover:bg-indigo-400 hover:text-gray-100 hover:cursor-pointer dark:bg-gray-800">13.00</a>
                    <a href="/seat/16/{{ $movie->id }}" class="bg-gray-200 p-1 rounded text-sm shadow-md text-indigo-600 hover:bg-indigo-400 hover:text-gray-100 hover:cursor-pointer dark:bg-gray-800">16.00</a>
                    <a href="/seat/19/{{ $movie->id }}" class="bg-gray-200 p-1 rounded text-sm shadow-md text-indigo-600 hover:bg-indigo-400 hover:text-gray-100 hover:cursor-pointer dark:bg-gray-800">19.00</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
@endsection