<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>

<nav class="w-full flex justify-center items-center flex-col">

    <div class="form-nav flex items-center justify-between px-24 mx-auto w-full">
        <div class="nav-right flex items-center space-x-4 py-8 h-100">
            <div class="logo">
                <img src="{{asset('img/ab-ikinci-el-logo 1.png')}}" alt="logo">
            </div>
            <div class="nav-primary flex items-center space-x-4">
                <div class="inline-block  text-gray-700  ">
                    <select
                        class="w-full h-10 pl-3 pr-6 text-base bg-blue-600 text-white border rounded-lg focus:shadow-outline">
                        <option>elektrikli araçlar</option>
                        <option>Another option</option>
                        <option>And one more</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center space-x-4 h-100">
                    <div>
                        <a href="">ikinci el bayi araçları</a>
                    </div>
                    <div>
                        <a href="">araç bulucu</a>
                    </div>
                    <div>
                        <a href="" class="text-sm">fiyat değerleme</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-left flex items-center space-x-4">
            <div class="flex items-center">
                <button
                    class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center"
                    style="background-color: rgba(233, 233, 233, 1)">
                    <img src="{{asset('img/Star 45.png')}}" alt="" class="text-sm pr-3 w-6 h-6 ">
                    <span>favorilerim</span>
                </button>
            </div>
            <div class="flex items-center">
                <button
                    class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center text-white"
                    style="background-color: rgba(4, 157, 217, 1)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>panelim</span>
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center w-full px-24 my-10">
        <div class="flex justify-center items-center w-full">
                    <span class="bg-grayBackground rounded-lg w-full text-gray-800 pl-8">
                      ikinci el / otomobil / bmw
                    </span>
        </div>
    </div>

    <div class="flex space-x-4 items-center w-11/12 mb-5 relative">
        <h4 class="text-3xl font-bold ">ikinci el satılık bmw 3 serisi</h4>
        <div class="flex justify-between space-x-4">
            <button class="flex flex-row justify-between bg-gray-200 space-x-4 px-2 rounded-lg flex-grow-1">
                <span>ford</span>
                <a href="">
                    x
                </a>
            </button>
            <button class="flex flex-row justify-between bg-gray-200 space-x-4 px-2 rounded-lg flex-grow-1">
                <span>ford</span>
                <a href="">
                    x
                </a>
            </button>
            <button class="flex flex-row justify-between bg-gray-200 space-x-4 px-2 rounded-lg flex-grow-1">
                <span>ford</span>
                <a href="">
                    x
                </a>
            </button>
            <button class="flex flex-row justify-between bg-gray-200 space-x-4 px-2 rounded-lg flex-grow-1">
                <span>ford</span>
                <a href="">
                    x
                </a>
            </button>
            <button class="flex flex-row justify-between bg-gray-200 space-x-4 px-2 rounded-lg flex-grow-1">
                <span>ford</span>
                <a href="">
                    x
                </a>
            </button>
        </div>

        <div class="absolute right-20 ">
            <a href="" class="flex items-center space-x-2 px-6 py-2 font-lato font-bold border border-gray-800 rounded-xl">
                    <span>
                        <img src="{{asset('img/add 1.png')}}" alt="">
                    </span>
                <span>
                        aramayı kaydet
                    </span>
            </a>
        </div>

    </div>

    <div class="flex space-x-4  px-24 items-center w-full mb-5">
            <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex-grow-1">
               2018+
            </span>

        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex space-x-2 flex-grow-1">
               <span>
                   <img src="{{asset('img/turkish-lira 1.png')}}" alt="">
               </span>
                <span>
                    400.000 altı
                </span>
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex space-x-2 flex-grow-1">
               <span>
                   <img src="{{asset('img/turkish-lira 1.png')}}" alt="">
               </span>
                <span>
                    250.000 üstü
                </span>
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex-grow-1">
             320d
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex-grow-1">
                sedan
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex space-x-2 flex-grow-1">
               <span>
                   <img src="{{asset('img/turkish-lira 1.png')}}" alt="">
               </span>
                <span>
                    400.000 altı
                </span>
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex space-x-2 flex-grow-1">
               <span>
                   <img src="{{asset('img/turkish-lira 1.png')}}" alt="">
               </span>
                <span>
                    250.000 üstü
                </span>
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex-grow-1">
             320d
            </span>
        <span class="px-4 py-2 text-blue-600 border border-black rounded-lg font-lato flex-grow-1">
             cupe
            </span>




    </div>
</nav>

<div class="flex space-x-2 items-start">
    <div class="flex flex-col w-25 p-5" style="background-color: #E1E1E1;">


        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col ">
            <h1 class="font-bold text-xl mb-4 text-blue-600">fiyat</h1>


            <div class="flex items-center justify-between">
                <span class="border border-gray-400 px-6 py-2 rounded-lg">min.fiyat</span>
                <span class="border border-gray-400 px-6 py-2 rounded-lg">maks. fiyat</span>
            </div>


            <div class="flex justify-center mt-4">
                <input type="range" class="text-blue-600 ikinci-el"  step="2" multiple>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-gray-400 px-4 py-2 w-1/6">
                    ara
                </button>
            </div>


        </div>


        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4 text-blue-600">fiyat değerlendirme</h1>


            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-blue-500 text-blue-500 rounded" name="">
                        <span class="ml-2">harika fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-blue-400 text-blue-400 rounded" name="">
                        <span class="ml-2">güzel fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-blue-300 text-blue-300 rounded" name="">
                        <span class="ml-2">normal fiyat</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-blue-600 px-6 py-2">
                    ara
                </button>
            </div>


        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4 text-blue-600">yakıt</h1>


            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">harika fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">güzel fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">normal fiyat</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-blue-600 px-6 py-2">
                    ara
                </button>
            </div>


        </div>
        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4 text-blue-600">kasa</h1>


            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">harika fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">güzel fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">normal fiyat</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-blue-600 px-6 py-2">
                    ara
                </button>
            </div>


        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col space-y-8">
            <h1 class="font-bold text-xl  text-blue-600">yıl</h1>

            <div class="flex justify-between">
                <span class="font-lato font-bold px-4 py-2 border border-gray-400 rounded-lg">min yıl</span>
                <span class="font-lato font-bold px-4 py-2 border border-gray-400 rounded-lg">min yıl</span>
            </div>
            <h1 class="font-bold text-xl mb-4 text-blue-600">kilometre</h1>
            <div class="flex justify-between">
                <span class="font-lato font-bold px-4 py-2 border border-blue-500 text-blue-500 rounded-lg">min yıl</span>
                <span class="font-lato font-bold px-4 py-2 border border-blue-500 text-blue-500 rounded-lg">min yıl</span>
            </div>





            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-blue-600 px-6 py-2">
                    ara
                </button>
            </div>


        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4 text-blue-600">vites</h1>


            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">harika fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">güzel fiyat</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-gray-600 text-blue-500 rounded" name="">
                        <span class="ml-2">normal fiyat</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-gray-400 px-6 py-2">
                    ara
                </button>
            </div>


        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <select class="form-select rounded-xl text-black font-bold font-lato">
                <option>renk</option>
                <option>mavi</option>

            </select>

        </div>
        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <select class="form-select rounded-xl text-black font-bold font-lato">
                <option>motor hacmi</option>
                <option>mavi</option>

            </select>

        </div>
        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <select class="form-select rounded-xl text-black font-bold font-lato">
                <option>motor gücü</option>
                <option>mavi</option>

            </select>

        </div>

    </div>

    <div class="filter-result w-4/6  rounded bg-white flex space-x-20 justify-start flex-wrap w-full">
        <div class="grid grid-cols-3 gap-4 mx-auto">
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5 h-auto" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>
            <div class="car-component border border-borderColor rounded-3xl bg-white flex flex-col pb-5" style="width: 440px">
                <div class="car-img m-4 rounded-lg rounded-t-2xl" >
                    <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl mb-4">
                </div>

                <div class="car-price">
                    <div class="flex space-x-2 items-center">
                        <div class="uppercase text-2xl ml-3 font-bold flex-shrink-0"> ₺ 450.900</div>
                        <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white flex-shrink-0 flex-grow-0" style="background-color: rgba(4, 119, 191, 1)">
                            <div class="flex items-center space-x-3 ml-4">
                                <img src="{{asset('img/smile 12.png')}}" alt="">
                                <div class="mr-2">
                                    harika fiyat
                                </div>
                            </div>
                            <div class="text-xs px-2 ">₺ 28.400 piyasanın altında</div>
                        </div>
                    </div>
                </div>

                <div class="car-title flex justify-center mt-10">
                    <h4 class="align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-12 px-4 py-6">
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Benzin</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>180 bg</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>123.050 km</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>Otomatik</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>6.6 lt</span>
                        </div>
                    </div>
                    <div class="col-span-1 flex items-center space-x-0">
                        <span><i class="fas fa-star text-blue-500"></i></span>
                        <div class="p-3 properties">
                            <span>2017</span>
                        </div>
                    </div>

                </div>

                <div class="ilan-datay flex justify-center">
                    <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
                        İlan Detayı
                    </button>
                </div>

            </div>

        </div>

    </div>
</div>









</body>
