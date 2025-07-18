@extends('layouts.app')

@section('content')


<style>
     .dropzone-form{
        display: flex;
        justify-content: center;
        /* flex-direction: column; */
    }

    .dropzone-area input[type="file"] {
        cursor: pointer;
        position: absolute;
        opacity: 0;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .dropzone-area .message {
        margin-top: 0.5rem;
        color: #555;
        font-size: 0.9rem;
    }

    .dropzone-area .file-upload-icon svg {
        height: 5rem;
        width: 5rem;
        margin-bottom: 0.5rem;
        stroke: #111926;
    }

    .dropzone-box {
        border-radius: 2rem;
        display: flex;
        justify-content: center;
        flex-direction: column;
        max-width: 36rem;
        width: 100%;
    }

    .dropzone-area {
        padding: 1rem;
        position: relative;
        margin-top: 1rem;
        min-height: 16rem;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 2px dashed #111926;
        border-radius: 1rem;
        color: #111926;
        cursor: pointer;
        transition: background-color 0.3s ease;
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

    .btnDiv {
        position: absolute;
        bottom: 15px;
        left: 48%;
        transform: translateX(-50%);
    }

    @media (max-width: 230px) {
        #one {
            width: 50% !important;
        }

        #two {
            width: 50% !important;
        }
    }
</style>


</head>
<!-- <script>
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
</script> -->

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default text-slate-500 bg-light" >
    <div class="absolute w-full  dark:hidden min-h-75 bg-light"></div>
    @include('aside')

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
                        <li class="text-sm pl-2 capitalize leading-normal text-dark before:float-left before:pr-2 before:text-dark before:content-['/']" aria-current="page">Services</li>
                    </ol>

                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">

                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm text-blue-500 transition-all ease-nav-brand" sidenav-trigger>
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
        <div class="w-full px-6 mx-auto">
            <!-- row 1 -->


            <!-- cards row 2 -->
            <!-- Blog Form -->
            <div class="backdrop-blur-md p-8  shadow-2xl ring-1 ring-gray-200 space-y-8 rounded-2xl" style="background-color: white;padding: 20px;">

                <!-- Header -->
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-800">New Testimonial Post</h2>
                    <p class="mt-2 text-gray-500">Add a testimonial image and write text on top of it.</p>
                </div>

                <!-- Form -->
                <form class="space-y-6" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <!-- Blog Cover Image Upload with Text Overlay -->
                    <div class="dropzone-form mx-auto" style="max-width: 576px; width: 100%; margin-bottom: 1.5rem; " >

                        <!-- Dropzone Area -->
                        <div class="dropzone-box" id="upload-form">
                            <div class="dropzone-area">
                                <div class="file-upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    </svg>
                                </div>
                                <p>Click to upload or drag and drop</p>
                                <input type="file" required id="upload-file" name="image">
                                <p class="message">No files selected</p>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Title -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input name="title" type="text" placeholder="Enter testimonial title" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Blog Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1" style="margin-top: 20px;">Description</label>
                        <textarea name="description" rows="4" placeholder="Write your testimonial description here..." required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit"
                            class="bg-primary hover:bg-indigo-700 text-white font-semibold  rounded-lg shadow-md transition duration-300" style="padding: 7px;width: 130px;margin-top:15px">
                            Submit
                        </button>
                    </div>
                </form>
            </div>



            <!-- cards row 3 -->

            <footer class=" bg-[#247498] bg-white text-dark py-4 my-4 rounded-2xl">
                <div class="w-full px-6 mx-auto">
                    <div class="flex flex-col lg:flex-row justify-between items-center">

                        <!-- Left Content -->
                        <div class="text-center lg:text-left text-sm lg:mb-0">
                            © <script>
                                document.write(new Date().getFullYear());
                            </script>,
                            made with by
                            <a href="#" class="font-semibold hover:underline">COREX</a> for a better web.
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






    <!-- Close Modal Script -->
    <script>
        function closeModal() {
            document.getElementById("modalBackdrop").classList.add("hidden");
        }
    </script>


    <script>
        document.getElementById("imageUpload").addEventListener("change", function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            const preview = document.getElementById("preview");

            if (file) {
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove("hidden");
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    
    <script>
        const dropzoneBox = document.querySelector(".dropzone-box");
        const inputElement = document.querySelector("#upload-file");
        const dropZoneElement = inputElement.closest(".dropzone-area");
        const messageElement = dropZoneElement.querySelector(".message");

        // Show file name on selection
        inputElement.addEventListener("change", () => {
            if (inputElement.files.length) {
                updateDropzoneFileList(inputElement.files[0]);
            }
        });

        // Drag events
        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("dropzone--over");
        });

        ["dragleave", "dragend"].forEach((eventType) => {
            dropZoneElement.addEventListener(eventType, () => {
                dropZoneElement.classList.remove("dropzone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();
            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateDropzoneFileList(e.dataTransfer.files[0]);
            }
            dropZoneElement.classList.remove("dropzone--over");
        });

        // Display file info
        function updateDropzoneFileList(file) {
            const sizeInKB = (file.size / 1024).toFixed(1);
            messageElement.textContent = `${file.name}, ${sizeInKB} KB`;
        }

        // Optional submit handler
        dropzoneBox.addEventListener("submit", (e) => {
            e.preventDefault();
            const file = inputElement.files[0];
            if (file) {
                console.log("File to upload:", file);
            }
        });
    </script>

</body>

</html>
@endsection