<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <div class="overflow-hidden">
        <nav
            class="navbar flex justify-between bg-amber text-white items-center pr-[2vw] pt-[10px] w-screen"
        >
            <a
                href="{{ route('home') }}"
                class="flex align-middle hover:bg-ghost-white hover:text-night duration-200 rounded scale-[.85] p-[5px]"
            >
                <img
                    src="{{ asset('../Images/HiveMind Logo.png') }}"
                    alt="logo"
                    class="size-[75px] md:size-[100px] mr-10"
                />
                <div class="inline-block sm:flex justify-center">
                    <h1 class="text-2xl md:text-5xl border-corners-md">
                        HiveMind&nbsp;
                    </h1>
                </div>
            </a>
            <ul class="text-center list-none inline-flex">
                <li class="flex justify-center size-full">
                    <a href="{{ route('products') }}">Shop Us</a>
                </li>
                <li class="flex justify-center size-full text-nowrap">
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="flex justify-center size-full text-nowrap">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <div class="logoTextCenter NavLogoContainer flex">
                <input
                    type="text"
                    placeholder="Search"
                    class="rounded-md p-1 text-black hidden md:flex"
                />
                <a
                    href="{{ route('account') }}"
                    class="far fa-search fa-solid fa-2xl"
                ></a>
                <a
                    href="{{ route('basket') }}"
                    class="fas fa-shopping-basket fa-2xl"
                ></a>
                <a
                    href="{{ route('account') }}"
                    class="far fa-user fa-solid fa-2xl"
                ></a>
            </div>
        </nav>
    </div>
</body>
