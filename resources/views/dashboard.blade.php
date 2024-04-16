<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview Store Jamin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Barcode') }}</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Name') }}</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Unit') }}</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Amount') }}</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Allergy Info') }}</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Delivery Info') }}</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->barcode }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->unit }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->amount !== null ? $product->amount : '0' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('allergy.index', $product->id) }}" class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-times-circle"></i>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('delivery.index', $product->id) }}" class="text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-question-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
```
