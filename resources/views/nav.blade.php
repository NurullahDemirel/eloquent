<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="">

    <nav class="bg-gray-100">
        <div class="max-w-7xl mx-auto border border-red-200">
            <div class="flex justify-between">
                <div class="flex space-x-4 py-2">
                    <div>
                        <a href="" class="flex items-center py-2 px-3">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            <span class="font-bold">Better</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-3 hidden md:flex">
                        <a href="" class="py-2 px-3 hover:text-gray-900">Features</a>
                        <a href=""  class="py-2 px-3 hover:text-gray-900">Pricing</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 hidden md:flex">
                    <a href="" class="py-2 px-3">Login</a>
                    <a href="" class="py-2 px-3 bg-yellow-900 text-yellow-400 rounded">Sign Up</a>
                </div>
                <div class="md:hidden flex items-center">
                <button class="mobile-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                </div>

            </div>
        </div>
        <div class="mobile-content hidden">
            <a href="" class="block py-4 px-4 text-sm hover:bg-gray-200">Features</a>
            <a href="" class="block py-4 px-4 text-sm hover:bg-gray-200">Pricing</a>
        </div>
    </nav>
    <script>
        const bt=document.querySelector('button.mobile-menu');
        const menu=document.querySelector('div.mobile-content');
        bt.addEventListener('click',function (){
           menu.classList.toggle('hidden');
        });
    </script>

</body>
