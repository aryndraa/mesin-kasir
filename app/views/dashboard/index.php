<div class="py-6 px-6 ">
    <header class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold"><?= $data["title"] ?></h1>
    </header>

    <!-- Shortcut Report -->
    <section class="bg-white p-12 mt-12 rounded-lg">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-600">Shortcut Report</h2>
            <a href="#" class="text-lg font-medium text-gray-400">View Report ></a>
        </div>
        <div class="pt-12 flex justify-between">
            <div class="min-w-80 p-6 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="p-2 bg-green-500 text-white flex w-min mb-4 rounded-lg"> 
                    <i data-feather="dollar-sign"></i>
                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">Rp. 28.000</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">
                    Total Transection
                </p>
            </div>
            <div class="min-w-80 p-6 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="p-2 bg-blue-500 text-white flex w-min mb-4 rounded-lg"> 
                    <i data-feather="users"></i>
                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">123</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">
                    Total Customers
                </p>
            </div>
            <div class="min-w-80 p-6 bg-white border border-gray-200 rounded-lg shadow ">
                <div class="p-2 bg-red-500 text-white flex w-min mb-4 rounded-lg"> 
                    <i data-feather="box"></i>
                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">230</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">
                    Sell Items
                </p>
            </div>
        </div>
    </section>

    <!-- items sell -->
    <section class="bg-white my-8 rounded-lg flex">
        <div class="flex-1">
            <div class=" w-full bg-white rounded-lg p-4 md:p-6">
              <div class="flex justify-between mb-5">
                <h1 class="text-xl font-semibold text-gray-500">Laporan Pejualan</h1>
              </div>
              <div id="line-chart"></div>
              <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-2.5">
                <div class="pt-5">      
                  <a href="#" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-3.5 h-3.5 text-white me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                      <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z"/>
                      <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                    </svg>
                    View full report
                  </a>
                </div>
              </div>
            </div>

        </div>
        <div class="flex flex-col justify-between border-l-2 border pl-4">
            <div class="min-w-80 p-6 bg-white  ">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">28 Pcs</h5>
                </a>
                <p class="mb-3 font-normal text-green-500 ">
                    Foods
                </p>
            </div>
            <div class="min-w-80 p-6 bg-white  ">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">30 Pcs</h5>
                </a>
                <p class="mb-3 font-normal text-blue-500 ">
                    Drinks
                </p>
            </div>
            <div class="min-w-80 p-6 bg-white  ">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">40 Pcs</h5>
                </a>
                <p class="mb-3 font-normal text-yellow-500 ">
                    Sidemenu
                </p>
            </div>
        </div>
    </section>


</div>

<script>   
    const options = {
      chart: {
        height: "100%",
        maxWidth: "100%",
        type: "line",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      tooltip: {
        enabled: true,
        x: {
          show: false,
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        width: 6,
      },
      grid: {
        show: true,
        strokeDashArray: 0,
        padding: {
          left: 2,
          right: 2,
          top: -26
        },
      },
      series: [
        {
          name: "Clicks",
          data: [6500, 6418, 6456, 6526, 6356, 6456],
          color: "#1C64F2",
        },
        {
          name: "CPC",
          data: [6456, 6356, 6526, 6332, 6418, 6500],
          color: "#31C48D",
        },
      ],
      legend: {
        show: false
      },
      stroke: {
        curve: 'smooth'
      },
      xaxis: {
        categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
        labels: {
          show: true,
          style: {
            fontFamily: "Inter, sans-serif",
            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
          }
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
      },
      yaxis: {
        show: false,
      },
    }
    
    if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("line-chart"), options);
      chart.render();
    }
        
</script>