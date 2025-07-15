@extends('layouts.app')
@section('header')
    <h2 class="font-semibold text-3xl text-pink-800 dark:text-pink-200 leading-tight drop-shadow">
        <span class="inline-flex items-center">
            <svg class="w-7 h-7 mr-2 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Your Integrations
        </span>
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
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
                    <table class="min-w-full bg-white border">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Platform</th>
                                <th class="py-2 px-4 border-b">Domain</th>
                                <th class="py-2 px-4 border-b">Status</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($integrations as $integration)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $integration->platform }}</td>
                                    <td class="py-2 px-4 border-b">{{ $integration->domain }}</td>
                                    <td class="py-2 px-4 border-b">Not Synced</td>
                                    <td class="py-2 px-4 border-b">
                                        <form action="{{ route('integrations.sync', $integration) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                                Sync Now
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-2 px-4 text-center">No integrations found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection