@extends('layouts.main')

@section('main')
    <div class="w-full flex justify-center mt-10">
        <div class="w-full max-w-lg h-auto p-5 md:p-8 rounded bg-gray-100 dark:bg-gray-900 shadow shadow-gray-300 dark:shadow-gray-800">
            <div class="flex gap-5">
                <div class="text-indigo-500">
                    <!-- Heroicon - Chip Outline -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18 11c0-.959-.68-1.761-1.581-1.954C16.779 8.445 17 7.75 17 7c0-2.206-1.794-4-4-4-1.516 0-2.822.857-3.5 2.104C8.822 3.857 7.516 3 6 3 3.794 3 2 4.794 2 7c0 .902.312 1.726.817 2.396A1.993 1.993 0 0 0 2 11v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-2.637l4 2v-7l-4 2V11zm-5-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM6 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold mb-6 dark:text-indigo-500">Sign Up</h1>
            </div>
            <hr class="mb-8 dark:border-slate-700">
            <form method="POST" action="/register">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" name="name" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('name') is-invalid @enderror" placeholder="Input your name" value="{{ old('name') }}" required />
                    @error('name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" id="username" name="username" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('username') is-invalid @enderror" placeholder="Input your username" value="{{ old('username') }}" required />
                    @error('username')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" class="input block w-full p-2.5 text-sm rounded-lg border-gray-300 @error('password') is-invalid @enderror" placeholder="Input your password" required />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="md:grid md:grid-cols-2 gap-5">
                    <div class="mb-4">
                        <label for="password" class="label @error('password') is-invalid @enderror">Password</label>
                        <input type="password" id="password" name="password" class="input @error('password') is-invalid @enderror" placeholder="Input your password" required />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="confirm_password" class="label @error('confirm_password') is-invalid @enderror">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="input @error('confirm_password') is-invalid @enderror" placeholder="Input your confirm_password" required />
                        @error('confirm_password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                        @enderror
                    </div>
                </div> --}}
                <div class="mb-4">
                    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-400 text-white p-2 rounded">Register</button>
                </div>

                <p class="text-center dark:text-gray-400">Already have an account? <a href="/login" class="text-indigo-500 underline">Sign In</a></p>
            </form>
        </div>
    </div>
@endsection