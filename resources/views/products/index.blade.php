<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-indigo-800 dark:text-indigo-200 leading-tight drop-shadow">
            <span class="inline-flex items-center"><svg class="w-7 h-7 mr-2 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" /></svg> Products</span>
        </h2>
    </x-slot>
    <div class="py-12 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-700 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl p-8">
                <h3 class="text-2xl font-extrabold mb-6 text-indigo-700 dark:text-indigo-200">Product List</h3>
                @if($products->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full rounded-xl border-separate border-spacing-0 shadow-lg">
                            <thead>
                                <tr>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-indigo-500 dark:bg-indigo-700 rounded-tl-xl">Name</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-indigo-500 dark:bg-indigo-700">Description</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-indigo-500 dark:bg-indigo-700 rounded-tr-xl">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $i => $product)
                                    <tr class="transition hover:scale-[1.01] hover:shadow-md {{ $i % 2 === 0 ? 'bg-indigo-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }}">
                                        <td class="px-8 py-4 text-base font-semibold text-gray-900 dark:text-gray-100 rounded-l-xl">{{ $product->name }}</td>
                                        <td class="px-8 py-4 text-base text-gray-700 dark:text-gray-200">{{ $product->description }}</td>
                                        <td class="px-8 py-4 text-base text-indigo-700 dark:text-indigo-300 font-bold rounded-r-xl">${{ number_format($product->price, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center text-gray-500 dark:text-gray-300 py-12 text-lg">No products found.</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout> 