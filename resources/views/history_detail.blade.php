@extends('layouts.main')

@section('main')
    <div class="w-full max-w-xl mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-500 dark:border-gray-400">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
            <a href="#" class="text-sm font-medium text-indigo-600 hover:underline dark:text-indigo-500">
                Print
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-400">
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12">Movie</span>
                        <h1>{{ $detail->movie->name }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Time</span>
                        <h1>{{ $detail->time }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Seat</span>
                        <h1>{{ $detail->seat }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Studio</span>
                        <h1>{{ $detail->movie->studio_name }}</h1>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12">Ticket Price</span>
                        <h1>Rp. 50.000 x{{ $seats->count() }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12">Service Fees</span>
                        <h1>Rp. 2.000 x{{ $seats->count() }}</h1>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12 font-bold">Entire Pay</span>
                        <h1 class="font-bold">Rp. {{ $detail->total }}</h1>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex">
                        <span class="w-6/12 font-bold">Amount Paid</span>
                        <h1 class="font-bold">Rp. {{ $detail->cash }}</h1>
                    </div>
                    <div class="flex">
                        <span class="w-6/12 font-bold">Change</span>
                        <h1 class="font-bold">Rp. {{ $change }}</h1>
                    </div>
                </li>
            </ul>
            <div class="flex mt-4">
                <a href="/print/{{ $purchase_id }}" class="text-white bg-indigo-400 hover:bg-indigo-500 focus:ring-4 focus:ring-indigo-300 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-400 focus:outline-none dark:focus:ring-indigo-500">Print Ticket</a>
                <a href="/history" class="font-semibold text-gray-90 focus:ring-4 focus:ring-indigo-300 hover:font-medium rounded text-sm px-5 py-2.5 me-2 mb-2">History</a>
            </div>
        </div>
    </div>

@endsection