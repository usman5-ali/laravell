@extends('layouts.app')

@section('content')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

<!-- jQuery (required by DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<style>
    .btnDiv {
        position: absolute;
        bottom: 15px;
        left: 48%;
        transform: translateX(-50%);
    }

    .animate-fade-in {
        animation: fade-in 0.3s ease-in-out;
    }

    @keyframes fade-in {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @media (max-width: 230px) {
        #one {
            width: 50% !important;
        }
    }
</style>
<script>
    @if(session('success'))
    alertify.set('notifier', 'position', 'top-right');
    alertify.success("{{ session('success') }}");
    @endif

    @if(session('error'))
    alertify.set('notifier', 'position', 'top-right');
    alertify.error("{{ session('error') }}");
    @endif

    @if($errors -> any())
    alertify.set('notifier', 'position', 'top-right');
    @foreach($errors -> all() as $error)
    alertify.error("{{ $error }}");
    @endforeach
    @endif
</script>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default text-slate-500 bg-light ">
    <div class=" absolute w-full dark:hidden min-h-75 bg-light" >
    </div>
    <!-- sidenav  -->
    @include('aside')

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-3 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start bg-white my-4" navbar-main navbar-scroll="false">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="text-blue-500  opacity-50" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-dark before:float-left before:pr-2 before:text-dark before:content-['/']" aria-current="page">Blogs</li>
                    </ol>

                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">


                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <!-- online builder btn  -->
                        <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->

                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                                </div>
                            </a>
                        </li>





                    </ul>
                </div>
            </div>
        </nav>

        <!-- end Navbar -->

        <!-- cards -->
        <div class="w-full px-6  mx-auto">
            <!-- row 1 -->


            <!-- cards row 2 -->
            <!-- Blog Form -->
            <div class="backdrop-blur-md p-8  shadow-2xl ring-1 ring-gray-200 space-y-8 rounded-2xl" style="background-color: white;padding: 20px; height:720px;">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-800">All Services</h2>
                    <p class="mt-2 text-gray-500">Services Listing.</p>
                </div>
                @if ($services->count())
                <table class="table table-bordered" id="blogsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title ?? 'N/A' }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($service->description ?? '', 50) }}</td>
                            <td>{{ $service->created_at ? $service->created_at->format('d M Y') : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('services.show', $service->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info">No services found.</div>
                @endif
            </div>



            <!-- cards row 3 -->

            <footer class="text-dark bg-white rounded-2xl py-4 mt-4">
                <div class="w-full px-6 mx-auto">
                    <div class="flex flex-col lg:flex-row justify-between items-center">

                        <!-- Left Content -->
                        <div class="text-center lg:text-left text-sm lg:mb-0">
                            © <script>
                                document.write(new Date().getFullYear());
                            </script>,
                            made with by
                            <a href="#" class="font-semibold hover:underline text-slate-700">COREX</a> for a better web.
                        </div>

                        <!-- Right Links -->
                        <ul class="flex gap-3 text-sm">
                            <li><a href="#" class="hover:underline">Services</a></li>
                            <li><a href="#" class="hover:underline">Blog</a></li>
                        </ul>

                    </div>
                </div>
            </footer>
        </div>
        <!-- end cards -->
    </main>


</body>

</html>
<script>
    $(document).ready(function() {
        $('#blogsTable').DataTable({
            "pageLength": 10,
            "order": [
                [0, "desc"]
            ], // Sort by ID descending
        });
    });
</script>
@endsection