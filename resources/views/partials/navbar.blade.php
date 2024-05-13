<nav class="bg-gray-100 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-800 text-gray-500">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse md:order-1">
            <!-- Logo -->
            <div class="text-indigo-500">
                <!-- Heroicon - Chip Outline -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18 11c0-.959-.68-1.761-1.581-1.954C16.779 8.445 17 7.75 17 7c0-2.206-1.794-4-4-4-1.516 0-2.822.857-3.5 2.104C8.822 3.857 7.516 3 6 3 3.794 3 2 4.794 2 7c0 .902.312 1.726.817 2.396A1.993 1.993 0 0 0 2 11v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-2.637l4 2v-7l-4 2V11zm-5-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM6 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path>
                </svg>
            </div>
            <h1 class="self-center text-xl text-indigo-500 font-bold whitespace-nowrap dark:text-indigo-400">Bioskop Lara</h1>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @auth
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 me-2 rounded-full" src="{{ asset('/storage/profile/default.png') }}" alt="user photo">
                    {{ auth()->user()->name }}
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-gray-50 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-800 dark:divide-gray-700">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div class="truncate font-semibold">{{ auth()->user()->username }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-indigo-400">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-indigo-400">Change Password</a>
                    </li>
                    </ul>
                    <div class="py-2">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-400 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-red-400 dark:hover:text-red-500">Sign out</button>
                        </form>
                        {{-- <a href="#" class="block px-4 py-2 text-sm text-red-400 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-red-400 dark:hover:text-red-500">Sign out</a> --}}
                    </div>
                </div>
            @else
                {{-- ! Login --}}
                <a href="/login" class="text-gray-100 bg-indigo-500 hover:bg-indigo-400 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:focus:ring-indigo-400 flex gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m13 16 5-4-5-4v3H4v2h9z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                    <span>Login</span>
                </a>
            @endauth
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
            <li>
                <a href="/" class="block py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "Home") ? "bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent' }}" aria-current="page">List Movie</a>
            </li>
            <li>
                <a href="/history" class="block py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "History") ? "bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent' }}" aria-current="page">History</a>
            </li>
            <li>
                <a href="#" class="py-2 px-3 text-gray-100 rounded md:bg-transparent {{ ($title === "Seat" || $title === "Order" || $title === "History Detail") ? "block bg-indigo-500 md:text-indigo-500 md:p-0 md:dark:text-indigo-500" : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-500 md:p-0 md:dark:hover:text-indigo-500 dark:text-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-100 md:dark:hover:bg-transparent hidden' }}" aria-current="page">{{ 
                    ($title === "Seat") ? "Seat" : 
                        (($title === "Order") ? "Detail Order" : 
                            (($title === "History Detail") ? "History Detail" : 
                                "Seat")) 
                }}</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>