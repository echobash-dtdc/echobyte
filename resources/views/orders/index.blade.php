<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-green-800 dark:text-green-200 leading-tight drop-shadow">
            <span class="inline-flex items-center"><svg class="w-7 h-7 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" /></svg> Orders</span>
        </h2>
    </x-slot>
    <div class="py-12 bg-gradient-to-br from-green-50 via-blue-50 to-yellow-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-700 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl p-8">
                <h3 class="text-2xl font-extrabold mb-6 text-green-700 dark:text-green-200">Order List</h3>
                @if($orders->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full rounded-xl border-separate border-spacing-0 shadow-lg">
                            <thead>
                                <tr>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-green-500 dark:bg-green-700 rounded-tl-xl">Order #</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-green-500 dark:bg-green-700">Customer ID</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-green-500 dark:bg-green-700">Order Date</th>
                                    <th class="px-8 py-4 text-left text-lg font-bold text-white uppercase tracking-wider bg-green-500 dark:bg-green-700 rounded-tr-xl">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $i => $order)
                                    <tr class="transition hover:scale-[1.01] hover:shadow-md {{ $i % 2 === 0 ? 'bg-green-50 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }}">
                                        <td class="px-8 py-4 text-base font-semibold text-gray-900 dark:text-gray-100 rounded-l-xl">{{ $order->id }}</td>
                                        <td class="px-8 py-4 text-base text-gray-700 dark:text-gray-200">{{ $order->customer_id }}</td>
                                        <td class="px-8 py-4 text-base text-gray-700 dark:text-gray-200">{{ $order->order_date }}</td>
                                        <td class="px-8 py-4 text-base text-green-700 dark:text-green-300 font-bold rounded-r-xl">${{ number_format($order->total, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center text-gray-500 dark:text-gray-300 py-12 text-lg">No orders found.</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout> 