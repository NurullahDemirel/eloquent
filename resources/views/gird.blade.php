<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <nav class="w-full flex justify-center items-center flex-col">

        <div class="form-nav flex items-center justify-between px-24 mx-auto w-full">
            <div class="nav-right flex items-center space-x-4 py-8 h-100">
                <div class="logo">
                    Araç Bul
                </div>
                <div class="nav-primary flex items-center space-x-4">
                    <div class="inline-block  text-gray-700  ">
                        <select
                            class="w-full h-10 pl-3 pr-6 text-base bg-blue-500 text-white border rounded-lg focus:shadow-outline">
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
                            <a href="">elektrikli</a>
                        </div>
                        <div>
                            <a href="">hibrit</a>
                        </div>
                        <div>
                            <a href="" class="text-sm">şarj istasyonları</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-left flex items-center space-x-4">
                <div class="flex items-center">
                    <button
                        class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center"
                        style="background-color: rgba(233, 233, 233, 1)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span>kayıt ol</span>
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
                        <span>giris yap</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center w-full px-24 my-10">
            <div class="flex justify-center items-center w-full">
                <span class="bg-gray-400 rounded-lg w-full text-gray-200 pl-4">
                    sıfır km /listeleme
                </span>
            </div>
        </div>

        <div class="flex space-x-4  px-24 items-center w-full mb-5">
            <h4 class="text-3xl font-bold ">sıfır km otomobiller</h4>
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

        </div>

        <div class="flex space-x-4  px-24 items-center w-full mb-5">
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>
            <span class="px-4 py-2 text-searchButton border border-black rounded-lg font-lato flex-grow-1">
                ₺ 400.000 altı
            </span>

        </div>

    </nav>




<div class="flex">
    <div class="flex flex-col w-25 p-5" style="background-color: #E1E1E1;">
        <div class="bg-white rounded-lg px-4 py-6">
            <h1 class="font-bold text-xl">menzil</h1>
            <p class="text-sm text-gray-700 mt-2">elektrik motoruyla gidilebilecek maks. menzil</p>
            <input type="range" class="mt-10">
        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4">marka</h1>
            <div class="grid grid-cols-4 gap-4 overflow-hidden  overflow-y-auto pr-5" style="height: 200px">
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
                <div class="col-span-1 border border-gray-200 rounded-lg px-2 py-2 flex justify-center">
                    <button>
                        <img src="{{asset('img/BMW_logo_(gray) 1.svg')}}" alt="">
                    </button>
                </div>
            </div>
            <div class="flex justify-center mt-4">ford, audi</div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-searchButton px-4 py-2 w-1/6">
                    ara
                </button>
            </div>
        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col ">
            <h1 class="font-bold text-xl mb-4">seçenekler</h1>


            <div class="flex items-center justify-between">
                <span class="border border-gray-400 px-6 py-2 rounded-lg">min.fiyat</span>
                <span class="border border-gray-400 px-6 py-2 rounded-lg">₺ 350.000</span>
            </div>


            <div class="flex justify-center mt-4">
                <input type="range" class="text-searchButton" step="2" multiple>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-searchButton px-4 py-2 w-1/6">
                    ara
                </button>
            </div>


        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4">yakıt</h1>
            <div class="flex items-center justify-center space-x-4 space-y-3 flex-wrap">
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">benzin
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">dizel
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">hibrit
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">elektrik
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">plug-in-hibrit
                </label>
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">hafif hibrit
                </label>
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">lpg
                </label>
            </div>
            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-searchButton px-4 py-2 w-1/6">
                    ara
                </button>
            </div>
        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4">vites</h1>
            <div class="flex items-center justify-center space-x-4 space-y-3 flex-wrap">
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">manuel
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">otomatik
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">yarı otomatik
                </label>

            </div>
            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-gray-400 px-4 py-2 w-1/6">
                    ara
                </button>
            </div>
        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4">kasa tipi</h1>
            <div class="flex items-center justify-center space-x-4 space-y-3 flex-wrap">
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">sedan
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">hatchback
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">coupe
                </label>
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">suv
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">cabrio
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">station wagon
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">pick-up
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">mpv
                </label>

                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">crossover
                </label>
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">panelvan
                </label>
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">wagon-kombi
                </label>
                <label class="bg-gray-200 flex-grow py-1 box-border justify-center rounded-lg">
                    <input type="checkbox" id="benzin" value="valueofcheckbox" class="opacity-0">roadster
                </label>


            </div>
            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-gray-400 px-4 py-2 w-1/6">
                    ara
                </button>
            </div>
        </div>

        <div class="p-5 rounded-lg bg-white mt-4 flex flex-col">
            <h1 class="font-bold text-xl mb-4">seçenekler</h1>


            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-blue-500 rounded" name="">
                        <span class="ml-2">kampanyalı araçlar</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox border border-blue-500 rounded" name="">
                        <span class="ml-2">bayi fırsat araçlar</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="search rounded-lg text-white bg-gray-400 px-4 py-2 w-1/6">
                    ara
                </button>
            </div>


        </div>

    </div>


    <div class="filter-result w-4/6  rounded bg-white">

        <div class="flex items-center justify-between space-x-10 bg-gray-200 rounded-lg">
            <div class="w-1/6 flex pl-5">
                <img src="{{asset('img/fiat-500-l 1.png')}}" alt="">
            </div>

            <div class="w-5/6 flex flex-col divide-y divide-yellow-100 pr-3">
                <div class="w-full flex pb-2">
                    <div class="w-4/6 flex flex-col items-start pt-4">

                        <div class="car-name ">
                            <span class="uppercase font-bold text-3xl font-lato">fiat 500l</span>
                        </div>

                        <div class="car-version mt-2">
                            <span class="text-sm">4 version</span>
                        </div>

                        <div class="car-range-price mt-4 flex items-center space-x-4">
                            <span class="text-4xl text-searchButton">₺ 222.900</span>
                            <span class="text-4xl text-searchButton">-</span>
                            <span class="text-4xl text-searchButton">₺ 278.900</span>
                        </div>

                    </div>
                    <div class="w-1/6 flex flex-col items-start pt-4">
                        <span class="font-lato text-sm font-bold mb-4">renk</span>
                        <div class="colors flex space-x-4">
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between pt-2 mb-2">
                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 155@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>

                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 156@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <a href="" class="flex items-center justify-between space-x-4">
                            <span class="text-xl text-searchButton ">detaylı incele</span>
                            <img src="{{asset('img/Arrow 30.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between space-x-10 bg-gray-200 rounded-lg mt-4">
            <div class="w-1/6 flex pl-5">
                <img src="{{asset('img/fiat-500-l 1.png')}}" alt="">
            </div>

            <div class="w-5/6 flex flex-col divide-y divide-yellow-100 pr-3">
                <div class="w-full flex pb-2">
                    <div class="w-4/6 flex flex-col items-start pt-4">

                        <div class="car-name ">
                            <span class="uppercase font-bold text-3xl font-lato">fiat 500l</span>
                        </div>

                        <div class="car-version mt-2">
                            <span class="text-sm">4 version</span>
                        </div>

                        <div class="car-range-price mt-4 flex items-center space-x-4">
                            <span class="text-4xl text-searchButton">₺ 222.900</span>
                            <span class="text-4xl text-searchButton">-</span>
                            <span class="text-4xl text-searchButton">₺ 278.900</span>
                        </div>

                    </div>

                    <div class="w-1/6 flex flex-col items-start pt-4">
                        <span class="font-lato text-sm font-bold mb-4">renk</span>
                        <div class="colors flex space-x-4">
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between pt-2 mb-2">
                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 155@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>

                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 156@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <a href="" class="flex items-center justify-between space-x-4">
                            <span class="text-xl text-searchButton ">detaylı incele</span>
                            <img src="{{asset('img/Arrow 30.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between space-x-10 bg-gray-200 rounded-lg mt-4">
            <div class="w-1/6 flex pl-5">
                <img src="{{asset('img/fiat-500-l 1.png')}}" alt="">
            </div>

            <div class="w-5/6 flex flex-col divide-y divide-yellow-100 pr-3">
                <div class="w-full flex pb-2">
                    <div class="w-4/6 flex flex-col items-start pt-4">

                        <div class="car-name ">
                            <span class="uppercase font-bold text-3xl font-lato">fiat 500l</span>
                        </div>

                        <div class="car-version mt-2">
                            <span class="text-sm">4 version</span>
                        </div>

                        <div class="car-range-price mt-4 flex items-center space-x-4">
                            <span class="text-4xl text-searchButton">₺ 222.900</span>
                            <span class="text-4xl text-searchButton">-</span>
                            <span class="text-4xl text-searchButton">₺ 278.900</span>
                        </div>

                    </div>

                    <div class="w-1/6 flex flex-col items-start pt-4">
                        <span class="font-lato text-sm font-bold mb-4">renk</span>
                        <div class="colors flex space-x-4">
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between pt-2 mb-2">
                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 155@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>

                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 156@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <a href="" class="flex items-center justify-between space-x-4">
                            <span class="text-xl text-searchButton ">detaylı incele</span>
                            <img src="{{asset('img/Arrow 30.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between space-x-10 bg-gray-200 rounded-lg mt-4">
            <div class="w-1/6 flex pl-5">
                <img src="{{asset('img/fiat-500-l 1.png')}}" alt="">
            </div>

            <div class="w-5/6 flex flex-col divide-y divide-yellow-100 pr-3">
                <div class="w-full flex pb-2">
                    <div class="w-4/6 flex flex-col items-start pt-4">

                        <div class="car-name ">
                            <span class="uppercase font-bold text-3xl font-lato">fiat 500l</span>
                        </div>

                        <div class="car-version mt-2">
                            <span class="text-sm">4 version</span>
                        </div>

                        <div class="car-range-price mt-4 flex items-center space-x-4">
                            <span class="text-4xl text-searchButton">₺ 222.900</span>
                            <span class="text-4xl text-searchButton">-</span>
                            <span class="text-4xl text-searchButton">₺ 278.900</span>
                        </div>

                    </div>

                    <div class="w-1/6 flex flex-col items-start pt-4">
                        <span class="font-lato text-sm font-bold mb-4">renk</span>
                        <div class="colors flex space-x-4">
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                            <button class="rounded-full w-6 h-6">
                                <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between pt-2 mb-2">
                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 155@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>

                    <div class="flex items-center justify-between space-x-4">
                        <img src="{{asset('img/Varlık 156@3x.png')}}" alt="">
                        <span class="text-sm">1 kampanya mevcut</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <a href="" class="flex items-center justify-between space-x-4">
                            <span class="text-xl text-searchButton ">detaylı incele</span>
                            <img src="{{asset('img/Arrow 30.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const check = document.getElementById('benzin');
    check.addEventListener('change', (event) => {
        console.log(event.currentTarget.checked);
    })
</script>

</body>
