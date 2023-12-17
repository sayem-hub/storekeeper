

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Transaction') }}
        </h2>
    </x-slot>


<form class="max-w-sm mx-auto" action="{{ route('sales.store') }}" method="POST">
  @csrf
    <div class="mb-5">
        <label for="product_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Product</label>
        <select id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
        </select>
    </div>

    <div class="mb-5">
        <label for="unit_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit Price</label>
        <input type="number" id="unit_price" name="unit_price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Unit price" required>
      </div>



      <div class="mb-5">
        <label for="sale_qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sale Quantity</label>
        <input type="number" id="quantity" name="sale_qty" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Quantity" required>
      </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Transaction</button>
  </form>
</x-app-layout>