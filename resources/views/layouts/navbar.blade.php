<!DOCTYPE html>
<body>
    <div class="overflow-hidden">
        <nav
            class="navbar flex justify-between bg-amber text-white items-center px-[2vw] pt-[10px] w-screen"
        >
            <a
                href="{{ route('home') }}"
                class="flex align-middle hover:bg-jms-blue rounded scale-[.85] p-[5px]"
            >
                <img
                    src="{{ asset('Images\HiveMind Logo.png') }}"
                    alt="logo"
                    class="size-[50px]"
                />
                <div class="inline-block sm:flex justify-center">
                    <h1 class="text-5xl border-corners-md">HiveMind&nbsp;</h1>
                </div>
            </a>
            <ul class="text-center list-none inline-flex">
                <li class="flex justify-center size-full">About Me</li>
                <li class="flex justify-center size-full">Projects</li>
            </ul>

            <div class="NavLogoContainer sm:flex justify-between">
                <a><div class="NavLogo fab fa-linkedin"></div></a>
                <a><div class="NavLogo fab fa-github"></div></a>
            </div>
        </nav>
        <div class="cdw-right"></div>
    </div>
</body>
