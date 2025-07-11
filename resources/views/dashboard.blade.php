<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
                    <span class="inline-block mb-4 px-4 py-2 rounded-full font-semibold shadow-md text-base {{ $colorClass }}">
                        {{ ucfirst($userType->value ?? $userType) }}
                    </span>
                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">
                        Welcome, {{ auth()->user()->name }}
                    </div>
                    <div class="text-lg text-gray-600 dark:text-gray-300">
                        You are logged in as <span class="font-semibold">{{ ucfirst($userType->value ?? $userType) }}</span>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
