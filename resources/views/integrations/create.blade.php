@extends('layouts.app')
@section('header')
    <h2 class="font-semibold text-3xl text-pink-800 dark:text-pink-200 leading-tight drop-shadow">
        <span class="inline-flex items-center">
            <svg class="w-7 h-7 mr-2 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Create Source
        </span>
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    @if ($errors->any())
                        <div class="mb-4 text-red-600">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('integrations.store') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label for="platform" class="block mb-2 font-medium">Choose a platform:</label>
                            <select id="platform" name="platform" class="w-full p-2 border rounded mb-4" required>
                                <option value="" disabled selected>Select an option</option>
                                @foreach($integrations as $key => $label)
                                    <option value="{{ $key }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input name="access_token" type="text" placeholder="Enter your Access Token" class="w-full p-2 border rounded mb-2" required>
                        </div>
                        <div>
                            <input name="domain" type="text" placeholder="Enter your store domain" class="w-full p-2 border rounded mb-4" required>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="px-8 py-3 rounded-lg bg-pink-600 text-white font-semibold shadow hover:bg-pink-700 transition">
                                Set up Source
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection