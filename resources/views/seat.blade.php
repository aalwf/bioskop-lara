@extends('layouts.main')

@section('main')
    <div class="flex items-center justify-center flex-col">
        <h1 class="text-2xl font-bold text-indigo-500">{{ $movie->name }} ({{ $movie->studio_name }})</h1>
        <p class="text-lg">{{ $date }} <span class="mx-5">|</span> {{ $time }}</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-2 sm:grid-rows-2 sm:grid-cols-1 mt-5 gap-4">
        <?php $i = "A" ?>
        @for($r = 0; $r < $movie->studio_capacity / 12; $r++)
            <div class="flex flex-nowrap items-center justify-evenly">
                @for($c = 1; $c <= 6; $c++)
                <button class="seat" name="seat" value="{{ $i }}0{{ $c }}">
                    {{ $i }}0{{ $c }}
                </button>
                @endfor
            </div>
            <div class="flex flex-nowrap items-center justify-evenly">
                @for($c = 7; $c <= 12; $c++)
                    <button class="seat" name="seat" value="{{ $i }}{{ ($c > 9 ? $c : '0' . $c) }}">
                        {{ $i }}{{ ($c > 9 ? $c : '0' . $c) }}
                    </button>
                @endfor
            </div>
            <?php $i++; ?>
        @endfor
    </div>
    <div class="flex items-center justify-center mt-12">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="bg-indigo-500 text-gray-100 py-2 px-3 rounded shadow-md hover:bg-indigo-400 disabled:bg-indigo-300 disabled:cursor-not-allowed" id="confirm" disabled>Selesai Memilih</button>
    </div>
    
    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Confirm Of Order
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-8">
                    <div class="grid gap-4 mb-4">
                        <form action="" method="post">
                            <div class="flex">
                                <label class="font-bold w-6/12">Movie</label>
                                <h1>{{ $movie->name }}</h1>
                                <input type="text" name="movie" value="{{ $movie->name }}" class="hidden">
                            </div>
                            <div class="flex">
                                <label class="font-bold w-6/12">Time</label>
                                <h1>{{ $time }}</h1>
                                <input type="text" name="time" value="{{ $time }}" class="hidden">
                            </div>
                            <div class="flex">
                                <label class="font-bold w-6/12">Seat</label>
                                <h1 id="seat-selected-h1"></h1>
                                <input type="text" name="seat" value="" class="hidden seat-selected">
                            </div>
                            <div class="flex">
                                <label class="font-bold w-6/12">Studio</label>
                                <h1>{{ $movie->name }}</h1>
                                <input type="text" name="movie" value="{{ $movie->name }}" class="hidden">
                            </div>
                            <button type="submit" class="text-white inline-flex text-center items-center bg-indigo-500 hover:bg-indigo-400 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-500 dark:focus:ring-indigo-400">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Make an Order
                            </button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div> 
  

    <script>
        // Get the button
        const buttons = document.querySelectorAll(".seat");

        // Get the Confirm btn
        const confirmBtn = document.getElementById("confirm");

        // Get Seat Selected
        const seatSelected = document.querySelector(".seat-active");
        const seatSelectedH1 = document.getElementById("seat-selected-h1");

        // Loop melalui setiap tombol
        for (let i = 0; i < buttons.length; i++) {
            // Tambahkan event listener untuk setiap tombol
            buttons[i].addEventListener("click", function() {
                // const seat = () => (!buttons[i].classList.contains("seat-active")) ? buttons[i].value : '';
                this.classList.toggle("seat-active");
                if (buttons[i].classList.contains("seat-active")) {
                    confirmBtn.disabled = false;

                    const seat = [];
                    const isSeat = buttons[i].value;
                    seat.push(isSeat)
                    
                    console.log(seat);
                } else if (!buttons.classList.contains("seat-active")) {
                    confirmBtn.disabled = true;
                    const seat = [];
                }
            });
        }

        // buttons.forEach((button) => {
        //     // Tambahkan event listener untuk setiap tombol
        //     button.addEventListener("click", function() {
        //         this.classList.toggle("seat-active");
        //         if (button.selected) {
        //             const seat = [];
        //             let isSeat = button.value;
        //             console.log(isSeat);
        //             // seat.push(isSeat);
        //             // document.getElementById("seat-selected-h1").innerHTML = seat;
        //         } else {
        //             confirmBtn.disabled = false;
        //         }
        //     })
        // });
    </script>
@endsection