<!-- Add this CSS to preserve your dropdown styles -->
<style>
    .btnDiv {
        position: absolute;
        bottom: 15px;
        left: 20%;
        transform: translateX(-50%);
    }

    .accordion-button:not(.collapsed) {
        background-color: rgba(94, 114, 228, 0.13) !important;
        color: #000;
        box-shadow: none;
    }

    .accordion-item {
        border: none;
        background: transparent;
    }

    .accordion-button {
        padding: 0.8rem 1rem;
        font-weight: 500;
        color: #333;
        background-color: transparent;
    }

    .accordion-body {
        padding: 0.5rem 1.25rem;
    }

    .accordion-body a.dropdown-item {
        padding: 10px 20px;
        font-size: 0.95rem;
        color: #333;
        display: flex;
        align-items: center;
    }

    .accordion-body a.dropdown-item i {
        margin-right: 10px;
        color: #198754;
        width: 20px;
        text-align: center;
    }

    .accordion-body a.dropdown-item:hover {
        background-color: #f8f9fa;
        color: #198754;
    }

    .accordion-button::after {
        width: 0.8rem;
        height: 0.8rem;
        background-size: 0.8rem;
    }
</style>

<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-2 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0">
    <div class="h-19">
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="#" target="_blank">
            <img src="{{ asset('logo.jpg') }}" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" style="width:80%">
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto h-75 overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <!-- Dashboard -->
            <li class="my-0.5 w-full">
                <a class="py-2.7 {{ request()->routeIs('home') ? 'bg-blue-500/13' : '' }} dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 flex items-center whitespace-nowrap px-3 font-semibold text-slate-700 transition-colors" href="{{ route('home') }}">
                    <div class="mr-2 flex items-center justify-center rounded-lg bg-center stroke-0 text-center">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                </a>
            </li>
        </ul>

        <!-- Accordion Start -->
        <div class="accordion accordion-flush" id="sidebarAccordion">

            <!-- Services -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="servicesHeading">
                    <button class="accordion-button {{ request()->routeIs('services*') ? '' : 'collapsed' }} {{ request()->routeIs('services*') ? 'bg-blue-500/13' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#servicesCollapse" aria-expanded="{{ request()->routeIs('services*') ? 'true' : 'false' }}" aria-controls="servicesCollapse">
                        <i class="ni ni-world-2 text-danger me-2"></i> Services
                    </button>
                </h2>
                <div id="servicesCollapse" class="accordion-collapse collapse {{ request()->routeIs('services*') ? 'show' : '' }}" aria-labelledby="servicesHeading" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body d-flex flex-column">
                        <a class="dropdown-item {{ request()->routeIs('services.create') ? 'bg-blue-500/13 rounded' : '' }}" href="{{ route('services.create') }}">
                            <i class="fa-solid fa-pen-to-square"></i> Create Service
                        </a>
                        <a class="dropdown-item {{ request()->routeIs('services.index') ? 'bg-blue-500/13 rounded' : '' }}" href="{{ route('services.index') }}">
                            <i class="fa-solid fa-list"></i> Services Listing
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blogs -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="blogsHeading">
                    <button class="accordion-button {{ request()->routeIs('blogs*') ? '' : 'collapsed' }} {{ request()->routeIs('blogs*') ? 'bg-blue-500/13' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#blogsCollapse" aria-expanded="{{ request()->routeIs('blogs*') ? 'true' : 'false' }}" aria-controls="blogsCollapse">
                        <i class="fa-solid fa-blog text-success me-2"></i> Blogs
                    </button>
                </h2>
                <div id="blogsCollapse" class="accordion-collapse collapse {{ request()->routeIs('blogs*') ? 'show' : '' }}" aria-labelledby="blogsHeading" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body d-flex flex-column">
                        <a class="dropdown-item {{ request()->routeIs('blogs') ? 'bg-blue-500/13 rounded' : '' }}" href="{{ route('blogs') }}">
                            <i class="fa-solid fa-pen-to-square"></i> Create Blog
                        </a>
                        <a class="dropdown-item {{ request()->routeIs('blogs.fetch') ? 'bg-blue-500/13 rounded' : '' }}" href="{{ route('blogs.fetch') }}">
                            <i class="fa-solid fa-list"></i> Blog Listing
                        </a>
                    </div>
                </div>
            </div>

            <!-- FAQs (Static) -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading">
                    <button class="accordion-button  {{ request()->routeIs('faq*') ? '' : 'collapsed' }} {{ request()->routeIs('faq*') ? 'bg-blue-500/13' : '' }}" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse" aria-expanded="false" aria-controls="faqCollapse">
                        <i class="fa-solid fa-question-circle text-warning me-2"></i> FAQs
                    </button>
                </h2>
                <div id="faqCollapse" class="accordion-collapse collapse" aria-labelledby="faqHeading" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body d-flex flex-column">
                      <a class="dropdown-item {{ request()->routeIs('faqs.create') ? 'bg-blue-500/13 rounded' : '' }}" href="{{ route('faqs.create') }}">
                            <i class="fa-solid fa-pen-to-square"></i> Create FAQ
                        </a>
                        <a class="dropdown-item" href=" {{ route('faq.index') }}">
                            <i class="fa-solid fa-list"></i> FAQ Listing
                        </a>
                    </div>
                </div>
            </div>

            <!-- Testimonials (Static) -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="testimonialsHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#testimonialsCollapse" aria-expanded="false" aria-controls="testimonialsCollapse">
                        <i class="fa-solid fa-comment-dots text-info me-2"></i> Testimonials
                    </button>
                </h2>
                <div id="testimonialsCollapse" class="accordion-collapse collapse" aria-labelledby="testimonialsHeading" data-bs-parent="#sidebarAccordion">
                    <div class="accordion-body d-flex flex-column">
                        <a class="dropdown-item" href="{{ route('testimonials.create') }}">
                            <i class="fa-solid fa-pen-to-square"></i> Create Testimonial
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa-solid fa-list"></i> Testimonial Listing
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Accordion End -->

        <!-- Logout -->
        <div class="btnDiv d-flex ms-3 mt-3">
            <div class="d-flex align-items-center justify-content-center bg-transparent rounded-circle">
                <i class="ni ni-button-power text-red-600 text-sm leading-normal relative top-0"></i>
            </div>
            <a style="color:red;width: 83px; text-align: center;border-radius: 13px;" class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</aside>