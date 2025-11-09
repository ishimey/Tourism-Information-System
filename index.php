<?php include('head.php'); ?>

<body>
    <nav
        class="relative shadow-md flex w-full flex-wrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild  lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <span class="ms-2 text-xl text-black ">Navbar</span>
            <div class="ms-5 flex w-[30%] items-center justify-between">
                <input
                    type="search"
                    class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-surface transition duration-300 ease-in-out focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none motion-reduce:transition-none"
                    placeholder="Search"
                    aria-label="Search"
                    aria-describedby="button-addon2" />
                <span
                    class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-gray-600 [&>svg]:w-5"
                    id="basic-addon2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
        </div>
    </nav>
</body>