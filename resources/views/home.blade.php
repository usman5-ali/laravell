@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<style>
  .h-58 {
    height: 555px !important;
  }

  .text-blue-500 {
    color: #217599;
  }
</style>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-light text-slate-500">
  <div class="absolute w-full bg-light dark:hidden min-h-75"></div>
  <!-- sidenav  -->
  @include('aside')

  <!-- end sidenav -->

  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-3 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start mt-4 bg-white" navbar-main navbar-scroll="false">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="text-blue-500" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-dark before:float-left before:pr-2 before:text-dark  before:content-['/']" aria-current="page">Dashboard</li>
          </ol>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">

          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
            <!-- <li class="flex items-center">
              <a href="#" class="block px-0 py-2 text-sm font-semibold text-blue-500 transition-all ease-nav-brand">
                <i class="fa fa-user sm:mr-1"></i>
              </a>
            </li> -->
            <li class="flex items-center text-blue-500 pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                  <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                  <i class="ease relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
                </div>
              </a>
            </li>


            <!-- <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                 
                </a>
              </li> -->

            <!-- notifications -->

          </ul>
        </div>
      </div>
    </nav>

    <!-- end Navbar -->

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- Card 1: Services -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Services</p>
                    <h5 class="mb-2 font-bold dark:text-white">+3,462</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                      <span class="text-sm font-bold leading-normal text-red-600">-2%</span>
                      since last quarter
                    </p>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Blogs -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Blogs</p>
                    <h5 class="mb-2 font-bold dark:text-white">$103,430</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                      <span class="text-sm font-bold leading-normal text-emerald-500">+5%</span>
                      than last month
                    </p>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: Total Task Done -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <!-- top row: text left, icon right -->
              <div class="flex flex-row -mx-3 items-start">
                <!-- text content -->
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-gray-500 dark:text-white dark:opacity-60">Total Revenue</p>
                    <h5 class="mb-2 font-bold text-gray-800 dark:text-white">$9455.00</h5>
                    <p class="mb-0 text-sm font-semibold text-green-500 dark:text-green-400">
                      ↑ 40% <span class="font-normal text-gray-500 dark:text-white dark:opacity-60">vs last month</span>
                    </p>
                  </div>
                </div>

                <!-- icon (replacing chart) -->
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-indigo-500">
                    <i class="ni leading-none ni-chart-bar-32 text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <!-- Card 4: Total Task Done -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <p class="text-sm font-semibold uppercase text-gray-500 mb-0">Total Task Done</p>
              <h5 class="font-bold mb-0">145</h5>
              <div class="flex justify-between items-center text-sm text-gray-500">
                <span>Progress</span>
                <span>40%</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 40%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!-- cards row 2 -->
      <div class="flex flex-wrap mt-6 -mx-3">
        <!-- Left Chart Section -->
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
          <div class="relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl h-[400px]">
            <div class="mb-0 rounded-t-2xl border-b border-black/12.5 p-6 pt-4 pb-0">
              <h6 class="capitalize dark:text-white">Sales overview</h6>
              <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                <i class="fa fa-arrow-up text-emerald-500"></i>
                <span class="font-semibold">4% more</span> in 2021
              </p>
            </div>
            <div class="flex-auto p-4 h-full">
              <div class="h-full w-full relative">
                <canvas id="chart-line" class="h-full w-full" style="height:453px;"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Slider Section -->

       <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
  <div class="flex flex-col justify-between h-full p-6 bg-white rounded-2xl shadow-md dark:bg-slate-850 dark:shadow-dark-xl">
    
    <!-- Top Section -->
    <div>
      <div class="flex justify-between items-start mb-0">
        <div>
          <h2 class="text-sm font-semibold text-gray-500 uppercase dark:text-white dark:opacity-60">Current Balance</h2>
          <p class="text-3xl font-bold text-gray-800 dark:text-white mt-1">$35,856.94</p>
          <div class="flex items-center mt-4 text-green-500 dark:text-green-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
            </svg>
            <span class="ml-2 text-sm font-medium">+40% vs last month</span>
          </div>
        </div>

        <!-- Menu dots -->
        <button class="text-gray-400 hover:text-gray-600 dark:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zM10 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3zM10 14a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
          </svg>
        </button>
      </div>

      <!-- Bar Chart -->
      <div class="w-full" style="height: 380px;">
        <canvas id="balanceBarChart" style="width: 100%; height: 100%;"></canvas>
      </div>
    </div>

    <!-- Bottom Month Labels -->
    <div class="mt-6 px-5">
      <div class="flex justify-between text-xs text-gray-400 dark:text-white dark:opacity-50">
        <span>Jan</span>
        <span>Feb</span>
        <span>Mar</span>
        <span>Apr</span>
        <span>May</span>
        <span>Jun</span>
      </div>
    </div>
  </div>
</div>


      </div>

      <!-- cards row 3 -->



    
      <footer class="pt-4">
        <div class="w-full p-6 mx-auto bg-white rounded-2xl max-w-screen-xl">
          <div class="flex flex-col lg:flex-row items-center justify-between gap-y-4">
            <!-- Left side: copyright -->
            <div class="text-sm text-center lg:text-left text-slate-500">
              ©
              <script>
                document.write(new Date().getFullYear() + ",");
              </script>
              made with by
              <a href="#" class="font-semibold text-slate-700 dark:text-white" target="_blank">COREX</a>
              for a better web.
            </div>

            <!-- Right side: links -->
            <ul class="flex flex-wrap justify-center lg:justify-end gap-4 text-sm text-slate-500">
              <li>
                <a href="#" class="transition-colors hover:text-slate-700">Services</a>
              </li>
              <li>
                <a href="#" class="transition-colors hover:text-slate-700">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

    </div>
    <!-- end cards -->
  </main>
  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const ctx = document.getElementById("chart-line").getContext("2d");

      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [{
            label: 'Sales',
            data: [30, 40, 35, 50, 49, 60],
            borderColor: '#217599',
            backgroundColor: 'rgba(33, 117, 153, 0.2)',
            tension: 0.4,
            fill: true
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false, // Important for full height
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('balanceBarChart').getContext('2d');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [60, 75, 90, 85, 95, 100], // height representation in %
        backgroundColor: '#217599',
        borderRadius: 6,
        barPercentage: 0.6,
        categoryPercentage: 0.5
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { display: false },
        tooltip: { enabled: true }
      },
      scales: {
        x: {
          display: false,
          grid: { display: false }
        },
        y: {
          display: false,
          beginAtZero: true,
          max: 100,
          grid: { display: false }
        }
      }
    }
  });
</script>


</body>
@endsection