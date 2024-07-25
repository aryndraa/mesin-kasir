<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
            theme: {
                extend: {
                colors: {
                    clifford: '#da373d',
                }
                }
            }
            }
        </script>

        <!-- flowbite -->
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

        <!-- icon -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- chart -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    </head>
    <body>
        
    <!--  Sidebar  -->
        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 ">
                
                <h1 class="px-2 text-3xl py-4 font-bold">Program Kasir</h1>
            <ul class="space-y-4 pt-6 font-medium">
                <li>
                    <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="menus/" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <span class="flex-1 ms-3 whitespace-nowrap">Menus</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <span class="flex-1 ms-3 whitespace-nowrap">History</span>
                    </a>
                </li>
            </ul>
        </div>
        </aside>
        <main class="ml-64 bg-gray-100 min-h-screen">
     