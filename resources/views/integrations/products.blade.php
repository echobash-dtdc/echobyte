@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Synced Products
    </h2>
@endsection

@section('content')
    @if($error)
        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
            Error: {{ $error }}
        </div>
    @endif

    @if(count($products))
        <form id="products-form">
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">
                            <input type="checkbox" id="select-all" class="form-checkbox">
                        </th>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products['products'] as $product)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">
                                <input type="checkbox" name="products[]" value="{{ $product['id'] }}" class="product-checkbox form-checkbox">
                            </td>
                            <td class="py-2 px-4 border-b">{{ $product['id'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $product['title'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $product['status'] ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const selectAll = document.getElementById('select-all');
                const checkboxes = document.querySelectorAll('.product-checkbox');
                selectAll.addEventListener('change', function () {
                    checkboxes.forEach(cb => cb.checked = selectAll.checked);
                });
            });
        </script>
    @else
        <div class="mt-4">No products found.</div>
    @endif
@endsection
