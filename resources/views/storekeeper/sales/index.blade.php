<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transactions') }}
    </h2>
</x-slot>


                @if (session()->has('success'))
                    <div class="text-green-500 font-bold text-center py-2 px-4 rounded bg-green-100 mb-4">
                        {{ session()->get('success') }}
                    </div>
                @endif



    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
         <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> <a href="{{ route('sales.create') }}">Add Transactions</a></button>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3 text-center">SL</th>
                    <th class="px-6 py-3">Date & Time </th>
                    <th class="px-6 py-3">Product name </th>
                    <th class="px-6 py-3">Unit Price</th>
                    <th class="px-6 py-3">Quantity</th>
                    <th class="px-6 py-3">Total Price</th>
                </tr>
            </thead>

         <tbody>
            @if ($transactions->count() == 0)
                <tr>
                    <td colspan="7" class="px-6 py-4 text-center">No Transactions Found</td>
                </tr>
            @endif


            @foreach ( $transactions as $key=>$transaction)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
              
                <th class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center">{{ ++$key }}</th>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $transaction->created_at }}</td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $transaction->product_name }}</td>

                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800"> {{ $transaction->unit_price }}</td>

                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $transaction->unit_price }}</td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $transaction->total_price }}</td>
                
                               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>