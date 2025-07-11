<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-pink-800 dark:text-pink-200 leading-tight drop-shadow">
            <span class="inline-flex items-center"><svg class="w-7 h-7 mr-2 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg> Customers</span>
        </h2>
    </x-slot>
    <div class="py-12 bg-gradient-to-br from-pink-50 via-yellow-50 to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-700 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl p-8">
                <h3 class="text-2xl font-extrabold mb-6 text-pink-700 dark:text-pink-200">Customer List</h3>
                @if($customers->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full rounded-xl border-separate border-spacing-0 shadow-lg">
                            <thead>
                                <tr>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-pink-500 dark:bg-pink-700 rounded-tl-xl">Name</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-pink-500 dark:bg-pink-700">Email</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-pink-500 dark:bg-pink-700 rounded-tr-xl">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $i => $customer)
                                    <tr class="transition hover:scale-[1.01] hover:shadow-md {{ $i % 2 === 0 ? 'bg-pink-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }}">
                                        <td class="px-8 py-4 text-base font-semibold text-gray-900 dark:text-gray-100 rounded-l-xl">{{ $customer->name }}</td>
                                        <td class="px-8 py-4 text-base text-gray-700 dark:text-gray-200">{{ $customer->email }}</td>
                                        <td class="px-8 py-4 text-base text-gray-700 dark:text-gray-200 rounded-r-xl">{{ $customer->phone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center text-gray-500 dark:text-gray-300 py-12 text-lg">No customers found.</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout> 