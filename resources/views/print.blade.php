<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $title }} || Bioskop Lara</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
    <div class="container p-4 mx-auto">
        <div class="grid gap-6 lg:grid-cols-3 md:grid-cols-2 mt-4">
            @foreach ($seats as $seat)
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center mb-4 text-indigo-500 dark:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 11c0-.959-.68-1.761-1.581-1.954C16.779 8.445 17 7.75 17 7c0-2.206-1.794-4-4-4-1.516 0-2.822.857-3.5 2.104C8.822 3.857 7.516 3 6 3 3.794 3 2 4.794 2 7c0 .902.312 1.726.817 2.396A1.993 1.993 0 0 0 2 11v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-2.637l4 2v-7l-4 2V11zm-5-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM6 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path>
                        </svg>
                        <h1 class="text-3xl font-bold tracking-tight text-indigo-500 dark:text-indigo-500 ml-4">Bioskop Lara</h1>
                    </div>
                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">{{ $tickets->purchase->movie->name }}</h5>
                    <div class="flex">
                        <span class="w-1/5">Date</span>
                        <h1>: {{ $tickets->purchase->date }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-1/5">Seat</span>
                        <h1>: {{ $seat }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-1/5">Studio</span>
                        <h1>: {{ $tickets->purchase->movie->studio_name }}</h1>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="w-full mt-10">
            <button class="w-full text-white font-semibold bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800" type="button" onclick="window.print()">
                Print Now
            </button>
        </div>

    <script>
    </script>
    
</body>
</html>