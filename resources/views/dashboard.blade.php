<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 m-3"> <a href="{{ route('products.index') }}">Product Page</a></button>
                <button type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 float-right m-3"> <a href="{{ route('sales.index') }}">Sales Page</a></button>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 
                    <div class="flex flex-wrap justify-center mt-10">

                        <!-- card 1 -->
                        <div class="p-3 max-w-sm">
                            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-white dark:text-white text-lg font-medium">Today's Sale</h2>
                                </div>
                                <div class="flex flex-col justify-between flex-grow">
                                    <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                      {{ $todaySale }}
                                    </p>
                                    <a href="{{ route('sales.index') }}" class="mt-3 text-black dark:text-white hover:text-blue-600 inline-flex items-center">See Transactions
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                        <!-- card 2 -->
                        <div class="p-3 max-w-sm">
                            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-white dark:text-white text-lg font-medium">Yesterday's Sale</h2>
                                </div>
                                <div class="flex flex-col justify-between flex-grow">
                                    <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                        {{ $yesterdaySale }}
                                    </p>
                                    <a href="{{ route('sales.index') }}" class="mt-3 text-black dark:text-white hover:text-blue-600 inline-flex items-center">See Transactions
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                        <!-- card 3 -->
                        <div class="p-3 max-w-sm">
                            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-white dark:text-white text-lg font-medium">This Month's Sale</h2>
                                </div>
                                <div class="flex flex-col justify-between flex-grow">
                                    <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                       {{$thisMonthSale}}
                                    </p>
                                    <a href="{{ route('sales.index') }}" class="mt-3 text-black dark:text-white hover:text-blue-600 inline-flex items-center">See Transactions
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>



                         <!-- card 4 -->
                         <div class="p-3 max-w-sm">
                            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-white dark:text-white text-lg font-medium">Last Month's Sale</h2>
                                </div>
                                <div class="flex flex-col justify-between flex-grow">
                                    <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                        {{ $lastMonthSale }}
                                    </p>
                                    <a href="{{ route('sales.index') }}" class="mt-3 text-black dark:text-white hover:text-blue-600 inline-flex items-center">See Transactions
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
