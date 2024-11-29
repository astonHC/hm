<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navbar')
    
    <script>
       function addOne(){
    
        const quantity = document.getElementById("quantity-input")
        quantity.value = parseInt(quantity.value) + 1;
       }
       function loseOne(){
        const quantity = document.getElementById("quantity-input")
        quantity.value = Math.max(0, parseInt(quantity.value) - 1);
       }

    </script>

    <div id="basket-items-wrapper" class="w-[80%]">
        <p class="text-6xl ml-10 mt-10">Basket</p>
        <ul id="items" class="bg-yellow-300 text-3xl text-white rounded-lg p-10 ml-10 mt-10">
            <li class="bg-amber rounded-lg mb-10 p-10 flex justify-between">
                <div class="item-img-text-link"><a><img />item</a></div>
                    <!-- FORM FOR QTY BUTTONS -->
                    <form class="max-w-xs">
                        <div class="relative flex items-center max-w-[8rem]">
                
                            <button type="button" onClick="loseOne()" id="decrement-button" data-input-counter-decrement="quantity-input"
                                class="bg-yellow-100 dark:bg-yellow-700 dark:hover:bg-yellow-600 dark:border-yellow-600 hover:bg-yellow-200 border border-yellow-300 rounded-s-lg p-3 h-11 focus:ring-yellow-100 dark:focus:ring-yellow-700 focus:ring-2 focus:outline-none">
                                
                                <!-- minus icon -->
                                <svg class="w-3 h-3 text-yellow-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>

                            </button>
                            <input type="text" id="quantity-input" data-input-counter data-input-counter-min="1"
                                data-input-counter-max="50" aria-describedby="helper-text-explanation"
                                class="bg-yellow-50 border-x-0 border-yellow-300 h-11 text-center text-yellow-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-yellow-700 dark:border-yellow-600 dark:placeholder-yellow-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="1" value="1" required /> 

                                <!-- DATABASE REQUIRED FOR VALUE -->
                            <button type="button" onClick="addOne()" id="increment-button" data-input-counter-increment="quantity-input"
                                class="bg-yellow-100 dark:bg-yellow-700 dark:hover:bg-yellow-600 dark:border-yellow-600 hover:bg-yellow-200 border border-yellow-300 rounded-e-lg p-3 h-11 focus:ring-yellow-100 dark:focus:ring-yellow-700 focus:ring-2 focus:outline-none">
                                
                                <!--plus icon -->
                                <svg class="w-3 h-3 text-yellow-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </form>

               
            </li>

            <li class="bg-amber rounded-lg mb-10 p-10 flex justify-between">
                <div class="item-img-text-link"><a><img />item</a></div>
                    <!-- FORM FOR QTY BUTTONS -->
                    <form class="max-w-xs">
                        <div class="relative flex items-center max-w-[8rem]">
                
                            <button type="button" onClick="loseOne()" id="decrement-button" data-input-counter-decrement="quantity-input"
                                class="bg-yellow-100 dark:bg-yellow-700 dark:hover:bg-yellow-600 dark:border-yellow-600 hover:bg-yellow-200 border border-yellow-300 rounded-s-lg p-3 h-11 focus:ring-yellow-100 dark:focus:ring-yellow-700 focus:ring-2 focus:outline-none">
                                
                                <!-- minus icon -->
                                <svg class="w-3 h-3 text-yellow-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>

                            </button>
                            <input type="text" id="quantity-input" data-input-counter data-input-counter-min="1"
                                data-input-counter-max="50" aria-describedby="helper-text-explanation"
                                class="bg-yellow-50 border-x-0 border-yellow-300 h-11 text-center text-yellow-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-yellow-700 dark:border-yellow-600 dark:placeholder-yellow-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="1" value="1" required /> 

                                <!-- DATABASE REQUIRED FOR VALUE -->
                            <button type="button" onClick="addOne()" id="increment-button" data-input-counter-increment="quantity-input"
                                class="bg-yellow-100 dark:bg-yellow-700 dark:hover:bg-yellow-600 dark:border-yellow-600 hover:bg-yellow-200 border border-yellow-300 rounded-e-lg p-3 h-11 focus:ring-yellow-100 dark:focus:ring-yellow-700 focus:ring-2 focus:outline-none">
                                
                                <!--plus icon -->
                                <svg class="w-3 h-3 text-yellow-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </form>

                </div>
            </li>
            </div>
        </ul>
    </div>
</body>

</html>