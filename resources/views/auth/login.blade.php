@extends('layouts.main')

@section('content')
<div class="max-w-md mx-auto mt-20 bg-white p-8 rounded-2xl shadow-xl transform transition-all hover:scale-105 duration-300">
    <h2 class="text-3xl font-bold mb-6 text-center text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">Admin Login</h2>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf
        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">
                Email Address
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow duration-300" id="email" type="email" name="email" required autofocus placeholder="admin@example.com">
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">
                Password
            </label>
            <input class="shadow-sm appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow duration-300" id="password" type="password" name="password" required placeholder="••••••••">
        </div>
        <div class="flex items-center justify-between mt-8">
            <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transform transition hover:-translate-y-1 duration-300" type="submit">
                Sign In
            </button>
        </div>
    </form>
</div>
@endsection
