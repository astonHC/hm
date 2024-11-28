<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navbar')




    <div id="basket-items-wrapper" class="w-[80%]">
        <p class="text-6xl ml-10 mt-10">Basket</p>
        <ul id="items" class="bg-yellow-300 text-3xl text-white rounded-lg p-10 ml-10 mt-10">
            <li class="bg-amber rounded-lg mb-10 p-10 flex justify-between">
                <div class=""><img />item</div>
                <div class="ddl-trash">
                    <select class="drop-down text-black">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <i class="fa-solid fa-trash  text-3xl ml-5 hover:text-yellow-600"></i>
                </div>
            </li>
            <li class="bg-amber rounded-lg mb-10 p-10 flex justify-between">
                <div class=""><img />item</div>
                <div class="ddl-trash">

                    <form class="max-w-xs mx-auto">
                        <div class="relative flex items-center max-w-[8rem]">
                            <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                class="bg-yellow-100 dark:bg-yellow-600 dark:hover:bg-yellow-600 dark:border-yellow-600 hover:bg-yellow-200 border border-yellow-300 rounded-s-lg p-3 h-11 focus:ring-yellow-100 dark:focus:ring-yellow-700 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-yellow-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="text" id="quantity-input" data-input-counter
                                aria-describedby="helper-text-explanation"
                                class="w-10 border-none h-10"
                                placeholder="1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                class="bg-yellow-100 dark:bg-yellow-600 dark:hover:bg-yellow-600 dark:border-yellow-600 hover:bg-yellow-200 border border-yellow-300 rounded-e-lg p-3 h-11 focus:ring-yellow-100 dark:focus:ring-yellow-700 focus:ring-2 focus:outline-none">
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

        </ul>
    </div>
</body>

</html>