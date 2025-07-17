<style>
    .dropdown-menu.custom-dropdown {
        min-width: 250px;
        border-radius: 10px;
        padding: 10px 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: none;
        transition: all 0.3s ease;
    }

    .dropdown-menu.custom-dropdown .dropdown-item {
        padding: 10px 20px;
        font-size: 0.95rem;
        color: #333;
        display: flex;
        align-items: center;
    }

    .dropdown-menu.custom-dropdown .dropdown-item i {
        margin-right: 10px;
        color: #198754;
        width: 20px;
        text-align: center;
    }

    .dropdown-menu.custom-dropdown .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #198754;
    }

    .dropdown-toggle::after {
        margin-left: 5.25em;
    }

    .h-19 {
        height: 5.75rem;
    }

    .max-h-8 {
    max-height: 4rem;
}
.bg-blue-500\/13 {
    background-color: #2175994d;
}
</style>
<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="#" target="_blank">
            <img src="{{ asset('logo.jpg') }}" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" style="width:80%">
            <img src="" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />
            <!-- <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Argon Dashboard 2</span> -->
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto h-75 overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('home') ? 'bg-blue-500/13' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-3 font-semibold text-slate-700 transition-colors" href="{{route('home')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                </a>
            </li>



            <li class="nav-item dropdown">
                <a class="{{ request()->routeIs('services') ? 'bg-blue-500/13' : '' }} py-2.7 px-4 nav-link dropdown-toggle text-dark d-flex align-items-center gap-2 mt-2"
                    href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex align-items-center justify-content-center bg-transparent rounded-circle" style="width: 32px; height: 32px;">
                        <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                    </div>
                    <span class="fw-semibold ps-2">Services</span>
                </a>

                <ul class="dropdown-menu custom-dropdown" aria-labelledby="blogDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('services.create') }}">
                            <i class="fa-solid fa-pen-to-square"></i> Create Service
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('services.index') }}">
                            <i class="fa-solid fa-list"></i> Services Listing
                        </a>
                    </li>
                </ul>

            </li>


            <!-- <li class="mt-0.5 w-full">
                <a class="{{ request()->routeIs('blogs') ? 'bg-blue-500/13' : '' }} dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('blogs')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-blog text-red-600 text-sm leading-normal"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Blogs</span>
                </a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="{{ request()->routeIs('blogs') ? 'bg-blue-500/13' : '' }} py-2.7 px-4 nav-link dropdown-toggle text-dark d-flex align-items-center gap-2 mt-2"
                    href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex align-items-center justify-content-center bg-transparent rounded-circle" style="width: 32px; height: 32px;">
                        <i class="fa-solid fa-blog text-success"></i>
                    </div>
                    <span class="fw-semibold ps-2 pe-3">Blogs</span>
                </a>

                <ul class="dropdown-menu custom-dropdown" aria-labelledby="blogDropdown">
                    <li>
                        <a class="dropdown-item" href="{{route('blogs')}}">
                            <i class="fa-solid fa-pen-to-square"></i> Create Blog
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('blogs.fetch')}}">
                            <i class="fa-solid fa-list"></i> Blog Listing
                        </a>
                    </li>
                </ul>
            </li>






            <style>
                .btnDiv {
                    position: absolute;
                    bottom: 15px;
                    left: 28%;
                    transform: translateX(-50%);
                }
            </style>

            <div class="btnDiv d-flex ms-3">
                <div class="d-flex align-items-center justify-content-center bg-transparent rounded-circle" style="width: 32px; height: 32px;">
                    <i class="ni ni-button-power text-red-600 text-sm leading-normal relative top-0"></i>
                </div>
                <button style="color:red;width: 83px; text-align: center;border-radius: 13px;" class="dropdown-item" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </button>

            </div>


</aside>