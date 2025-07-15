@extends('layouts.app')
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif
    
    @if (session('warning'))
        <div class="mb-4 p-4 bg-yellow-100 text-yellow-800 rounded">
            {{ session('warning') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @php
                    $userType = auth()->user()->user_type;
                    $colorClass = match($userType->value ?? $userType) {
                        'admin' => 'bg-green-300 text-green-900',
                        'influencer' => 'bg-pink-300 text-pink-900',
                        'supplier' => 'bg-blue-300 text-blue-900',
                    };
                @endphp
                <div class="flex flex-col items-center justify-center min-h-[200px]">
                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">
                        Welcome, {{ auth()->user()->name }}
                    </div>
                    <div class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        You are logged in as <span class="font-semibold">{{ ucfirst($userType->value ?? $userType) }}</span>.
                    </div>
                    <div class="flex gap-6 mt-6">
                        <!-- <a href="{{ route('products.index') }}" class="px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold shadow hover:bg-blue-700 transition">Products</a>
                        <a href="{{ route('orders.index') }}" class="px-6 py-3 rounded-lg bg-green-600 text-white font-semibold shadow hover:bg-green-700 transition">Orders</a> -->
                        <a href="{{ route('integrations.create') }}" class="px-6 py-3 rounded-lg bg-pink-600 text-white font-semibold shadow hover:bg-pink-700 transition">Create Source</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
