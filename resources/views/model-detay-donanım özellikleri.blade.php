<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="flex flex-col">

<nav class="w-full flex justify-center items-center flex-col">

    <div class="form-nav flex items-center justify-between px-24 mx-auto w-full">
        <div class="nav-right flex items-center space-x-4 py-8 h-100">
            <div class="logo">
                <img src="{{asset('img/ab-sifir-km-logo 1.png')}}" alt="logo">
            </div>
            <div class="nav-primary flex items-center space-x-4">
                <div class="inline-block  text-gray-700  ">
                    <select
                        class="w-full h-10 pl-3 pr-6 text-base bg-searchButton text-white border rounded-lg focus:shadow-outline">
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
                <span class="bg-grayBackground rounded-lg w-full text-gray-800 pl-4">
                  otomobil / bmw / 1 serisi / 1 serisi özellikleri
                </span>
        </div>
    </div>
</nav>

<div class="flex items-center justify-center space-x-10 nav-tabs font-lato">

    <div class="nav-tabs-item text-blue-600 border-b-2 border-blue-300">
        <a href=""> özellikler</a>
    </div>

    <div class="nav-tabs-item">
        <a href=""> donanım özellikleri</a>
    </div>

    <div class="nav-tabs-item">
        <a href="">teknik özellikler</a>
    </div>

    <div class="nav-tabs-item">
        <a href="">renk</a>
    </div>

    <div class="nav-tabs-item">
        <a href="">resim</a>
    </div>

    <div class="nav-tabs-item">
        <a href="">video</a>
    </div>

    <div class="nav-tabs-item">
        <a href="">yorum</a>
    </div>


</div>

<section class="flex justify-center items-center flex-col bg-grayBackground mx-10 rounded-lg pb-20">
    <div class="flex items-center justify-between px-24 mx-auto w-full">
        <div class="card-img w-1/3">
            <img src="{{asset('img/1_mobile 1.png')}}" alt="">
        </div>

        <div class="w-1/3 flex items-center ">
            <div class="colors flex justify-end flex-wrap">

                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>
                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>
                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>
                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>
                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>
                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>
                <div class="w-1/5 mx-1 my-1">
                    <button class="rounded-full w-6 h-6">
                        <img src="{{asset('img/Ellipse 64.png')}}" alt="">
                    </button>
                </div>

            </div>
        </div>

        <div class="w-1/3 flex flex-col space-x-2 space-y-2 items-start">

            <div class="flex space-x-2">
                <div class="car-logo">
                    <img src="{{asset('img/audi-logo 1.png')}}" alt="car-logo">
                </div>
                <div class="car-model-name font-lato text-sm font-bold">
                    Audi
                </div>
            </div>

            <div class="car-sub-model text-lg font-bold font-lato">
                A8 Long Sedan
            </div>

            <div class="car-range-price-text flex items-center space-x-10">
                <div class="flex flex-col  items-start">
                    <div class="car-min-price text-sm font-lato">
                        <span>min.</span>
                    </div>

                    <div class="car-range-price text-2xl font-lato">
                        <span>₺ 890.000</span>
                    </div>
                </div>

                <div class="flex flex-col  items-start">
                    <div class="car-min-price text-sm font-lato">
                        <span>min.</span>
                    </div>

                    <div class="car-range-price text-2xl font-lato">
                        <span>₺ 1.390.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div
    class="flex flex-col space-y-2 bg-white justify-center w-3/4 mx-auto rounded-3xl shadow-lg h-auto relative -top-20">
    <div class="flex flex-row items-center justify-around my-5">
        <div class="flex justify-between space-x-4">
            <div class="flex space-x-2">
                <img src="{{asset('img/Star 24.png')}}" alt="">
                <span>otomatik</span>
            </div>
            <div class="flex space-x-2">
                <img src="{{asset('img/Star 24.png')}}" alt="">
                <span>otomatik</span>
            </div>
        </div>

        <div class="text-lg font-lato font-bold">
            <span>Standart 50 TDI quattro 286 hp tiptronic</span>
        </div>

        <div class="flex space-x-2">
            <span class="text-searchButton font-lato">euro ncap</span>
            <div class="w-6 h-6 flex justify-center bg-searchButton font-weight-light text-white rounded-full">i</div>
        </div>
    </div>

    <div class="flex items-center justify-center px-24 space-x-0">
        <div class="flex flex-col items-center space-y-2 justify-center w-1/5">
            <img src="{{asset('img/Star 19.png')}}" alt="" class="flex justify-center w-6 h-6">
            <span class="font-lato flex justify-center font-bold">0-100 hızlanma</span>
            <span class="font-lato flex justify-center font-bold">5.9 sn</span>
        </div>
        <div class="flex flex-col items-center space-y-2 justify-center w-1/5">
            <img src="{{asset('img/Star 19.png')}}" alt="" class="flex justify-center w-6 h-6">
            <span class="font-lato flex justify-center font-bold">0-100 hızlanma</span>
            <span class="font-lato flex justify-center font-bold">5.9 sn</span>
        </div>
        <div class="flex flex-col items-center space-y-2 justify-center w-1/5">
            <img src="{{asset('img/Star 19.png')}}" alt="" class="flex justify-center w-6 h-6">
            <span class="font-lato flex justify-center font-bold">0-100 hızlanma</span>
            <span class="font-lato flex justify-center font-bold">5.9 sn</span>
        </div>
        <div class="flex flex-col items-center space-y-2 justify-center w-1/5">
            <img src="{{asset('img/Star 19.png')}}" alt="" class="flex justify-center w-6 h-6">
            <span class="font-lato flex justify-center font-bold">0-100 hızlanma</span>
            <span class="font-lato flex justify-center font-bold">5.9 sn</span>
        </div>
        <div class="flex flex-col items-center space-y-2 justify-center w-1/5">
            <img src="{{asset('img/Star 19.png')}}" alt="" class="flex justify-center w-6 h-6">
            <span class="font-lato flex justify-center font-bold">0-100 hızlanma</span>
            <span class="font-lato flex justify-center font-bold">5.9 sn</span>
        </div>


    </div>

    <div class="flex justify-center relative -bottom-5 my-25">
        <button class="px-8 py-4 bg-searchButton text-white font-lato rounded-xl">ücertsiz teklif al</button>
    </div>

</div>

<div class="hardware-packages w-full mb-10">
    <div class="w-full mx-auto flex flex-col space-y-10">
        <h4 class="font-lato font-bold flex justify-center">donanım paketleri</h4>

        <div class="flex items-center justify-center space-x-16 nav-tabs font-lato">

            <div class="nav-tabs-item text-blue-600 border-b-2 border-blue-300">
                <a href=""> tümü</a>
            </div>

            <div class="nav-tabs-item">
                <a href=""> trendline</a>
            </div>

            <div class="nav-tabs-item">
                <a href="">basicline</a>
            </div>

            <div class="nav-tabs-item">
                <a href="">comfortline</a>
            </div>

            <div class="nav-tabs-item">
                <a href="">highline</a>
            </div>
        </div>
    </div>
</div>

<div class="hardware-packages-items w-full mb-10">
    <div class="w-full mx-auto flex flex-col space-y-10">
        <div class="w-11/12 flex items-center mx-auto space-y-4 flex-wrap">
            <div class="w-full flex space-x-4 space-y-4">
                <div class="w-1/3 flex flex-col bg-grayBackground rounded-2xl justify-center space-y-6 pt-4 pb-5">
                    <div class="w-full flex flex-col space-y-2" >
                        <div class="car-model flex justify-center">
                            <span class="text-sm uppercase font-lato font-bold">Audi A8 L</span>
                        </div>

                        <div class="car-branch flex justify-center">
                            <span class="text-lg font-bold font-lato tracking-wide ">Feel Bold 1.2 PureTech 130 HP - EAT6</span>
                        </div>
                        <div class="car-branch flex justify-center">
                            <span class="text-xs text-gray-900">otomatik, dizel, 1599cc, 225bg</span>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-10 bg-white rounded-lg justify-center m-5 py-5">
                        <div class="flex space-x-4 items-center justify-center ">
                            <img class="w-6 h-6" src="{{asset('img/tl-turk-lirasi_freelogovectors 6.png')}}" alt="">
                            <span class="font-lato font-bold text-2xl">1.390.000</span>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-between space-x-4">
                                <a href="" class="bg-btnBlue-dark rounded-xl px-6 py-4 text-white font-bold font-lato">seç ve teklif al</a>
                                <a href="" class="bg-btnBlue-light rounded-xl px-6 py-4 text-white font-bold font-lato">detayı incele</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col bg-grayBackground rounded-2xl justify-center space-y-6 pt-4 pb-5">
                    <div class="w-full flex flex-col space-y-2" >
                        <div class="car-model flex justify-center">
                            <span class="text-sm uppercase font-lato font-bold">Audi A8 L</span>
                        </div>

                        <div class="car-branch flex justify-center">
                            <span class="text-lg font-bold font-lato tracking-wide ">Feel Bold 1.2 PureTech 130 HP - EAT6</span>
                        </div>
                        <div class="car-branch flex justify-center">
                            <span class="text-xs text-gray-900">otomatik, dizel, 1599cc, 225bg</span>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-10 bg-white rounded-lg justify-center m-5 py-5">
                        <div class="flex space-x-4 items-center justify-center ">
                            <img class="w-6 h-6" src="{{asset('img/tl-turk-lirasi_freelogovectors 6.png')}}" alt="">
                            <span class="font-lato font-bold text-2xl">1.390.000</span>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-between space-x-4">
                                <a href="" class="bg-btnBlue-dark rounded-xl px-6 py-4 text-white font-bold font-lato">seç ve teklif al</a>
                                <a href="" class="bg-btnBlue-light rounded-xl px-6 py-4 text-white font-bold font-lato">detayı incele</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col bg-grayBackground rounded-2xl justify-center space-y-6 pt-4 pb-5">
                    <div class="w-full flex flex-col space-y-2" >
                        <div class="car-model flex justify-center">
                            <span class="text-sm uppercase font-lato font-bold">Audi A8 L</span>
                        </div>

                        <div class="car-branch flex justify-center">
                            <span class="text-lg font-bold font-lato tracking-wide ">Feel Bold 1.2 PureTech 130 HP - EAT6</span>
                        </div>
                        <div class="car-branch flex justify-center">
                            <span class="text-xs text-gray-900">otomatik, dizel, 1599cc, 225bg</span>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-10 bg-white rounded-lg justify-center m-5 py-5">
                        <div class="flex space-x-4 items-center justify-center ">
                            <img class="w-6 h-6" src="{{asset('img/tl-turk-lirasi_freelogovectors 6.png')}}" alt="">
                            <span class="font-lato font-bold text-2xl">1.390.000</span>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-between space-x-4">
                                <a href="" class="bg-btnBlue-dark rounded-xl px-6 py-4 text-white font-bold font-lato">seç ve teklif al</a>
                                <a href="" class="bg-btnBlue-light rounded-xl px-6 py-4 text-white font-bold font-lato">detayı incele</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex space-x-4 space-y-4">
                <div class="w-1/3 flex flex-col bg-grayBackground rounded-2xl justify-center space-y-6 pt-4 pb-5">
                    <div class="w-full flex flex-col space-y-2" >
                        <div class="car-model flex justify-center">
                            <span class="text-sm uppercase font-lato font-bold">Audi A8 L</span>
                        </div>

                        <div class="car-branch flex justify-center">
                            <span class="text-lg font-bold font-lato tracking-wide ">Feel Bold 1.2 PureTech 130 HP - EAT6</span>
                        </div>
                        <div class="car-branch flex justify-center">
                            <span class="text-xs text-gray-900">otomatik, dizel, 1599cc, 225bg</span>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-10 bg-white rounded-lg justify-center m-5 py-5">
                        <div class="flex space-x-4 items-center justify-center ">
                            <img class="w-6 h-6" src="{{asset('img/tl-turk-lirasi_freelogovectors 6.png')}}" alt="">
                            <span class="font-lato font-bold text-2xl">1.390.000</span>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-between space-x-4">
                                <a href="" class="bg-btnBlue-dark rounded-xl px-6 py-4 text-white font-bold font-lato">seç ve teklif al</a>
                                <a href="" class="bg-btnBlue-light rounded-xl px-6 py-4 text-white font-bold font-lato">detayı incele</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col bg-grayBackground rounded-2xl justify-center space-y-6 pt-4 pb-5">
                    <div class="w-full flex flex-col space-y-2" >
                        <div class="car-model flex justify-center">
                            <span class="text-sm uppercase font-lato font-bold">Audi A8 L</span>
                        </div>

                        <div class="car-branch flex justify-center">
                            <span class="text-lg font-bold font-lato tracking-wide ">Feel Bold 1.2 PureTech 130 HP - EAT6</span>
                        </div>
                        <div class="car-branch flex justify-center">
                            <span class="text-xs text-gray-900">otomatik, dizel, 1599cc, 225bg</span>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-10 bg-white rounded-lg justify-center m-5 py-5">
                        <div class="flex space-x-4 items-center justify-center ">
                            <img class="w-6 h-6" src="{{asset('img/tl-turk-lirasi_freelogovectors 6.png')}}" alt="">
                            <span class="font-lato font-bold text-2xl">1.390.000</span>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-between space-x-4">
                                <a href="" class="bg-btnBlue-dark rounded-xl px-6 py-4 text-white font-bold font-lato">seç ve teklif al</a>
                                <a href="" class="bg-btnBlue-light rounded-xl px-6 py-4 text-white font-bold font-lato">detayı incele</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col bg-grayBackground rounded-2xl justify-center space-y-6 pt-4 pb-5">
                    <div class="w-full flex flex-col space-y-2" >
                        <div class="car-model flex justify-center">
                            <span class="text-sm uppercase font-lato font-bold">Audi A8 L</span>
                        </div>

                        <div class="car-branch flex justify-center">
                            <span class="text-lg font-bold font-lato tracking-wide ">Feel Bold 1.2 PureTech 130 HP - EAT6</span>
                        </div>
                        <div class="car-branch flex justify-center">
                            <span class="text-xs text-gray-900">otomatik, dizel, 1599cc, 225bg</span>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-10 bg-white rounded-lg justify-center m-5 py-5">
                        <div class="flex space-x-4 items-center justify-center ">
                            <img class="w-6 h-6" src="{{asset('img/tl-turk-lirasi_freelogovectors 6.png')}}" alt="">
                            <span class="font-lato font-bold text-2xl">1.390.000</span>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-between space-x-4">
                                <a href="" class="bg-btnBlue-dark rounded-xl px-6 py-4 text-white font-bold font-lato">seç ve teklif al</a>
                                <a href="" class="bg-btnBlue-light rounded-xl px-6 py-4 text-white font-bold font-lato">detayı incele</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full space-y-4 flex flex-col text-lg pt-5">
                <h4 class="font-lato font-bold  flex justify-center">tüm donanım paketlerini göster</h4>
                <div class="flex justify-center">
                    <a href="">
                        <img src="{{asset('img/Arrow 1.png')}}" class="w-5 h-5" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hardware-packages-items w-full mb-10">


    <div class="snap-start w-11/12 h-full flex items-center justify-center flex-shrink-0 flex-grow-1 space-x-10" id="slide-1">
        <div class="w-1/2">
            <div class="flex flex-col justify-center items-center bg-grayBackground mx-auto rounded-2xl w-full">
                <div class="flex divide-x divide-gray-900 w-full">
                    <img src="{{asset('img/audi 4.png')}}" alt="">
                    <img src="{{asset('img/audi 4.png')}}" alt="">
                </div>
                <div class="flex  bg-white w-11/12 my-5 rounded-2xl justify-around mx-2 ">
                    <div class="w-1/3 flex-col flex space-y-2 justify-start">
                        <h4 class="text-xl font-bold font-lato flex justify-center">Volkswagen Passat</h4>
                        <span class="text-sm text-gray-400 font-lato flex justify-center">Comfortline 1.5 tsi dsg 4 motion</span>
                        <h4 class="text-xl font-lato font-bold flex justify-center mt-10">₺ 459.590</h4>
                    </div>

                    <div class="w-1/3 flex-col flex justify-between pt-5">
                        <div class="flex justify-center">
                            <img src="{{asset('img/Strikethrough@2x 2.png')}}" alt="" class="w-6 h-6">
                        </div>
                        <div class="flex justify-center">
                            <button class="search rounded-lg text-white bg-searchButton w-1/2">
                                karşılaştır
                            </button>
                        </div>
                    </div>

                    <div class="w-1/3 flex-col flex space-y-2 justify-start">
                        <h4 class="text-xl font-bold font-lato flex justify-center">Volkswagen Passat</h4>
                        <span class="text-sm text-gray-400 font-lato flex justify-center">Comfortline 1.5 tsi dsg 4 motion</span>
                        <h4 class="text-xl font-lato font-bold flex justify-center mt-10">₺ 459.590</h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-1/2">
            <div class="flex flex-col justify-center items-center bg-grayBackground mx-auto rounded-2xl w-full" >
                <div class="flex divide-x divide-gray-900">
                    <img src="{{asset('img/audi 4.png')}}" alt="">
                    <img src="{{asset('img/audi 4.png')}}" alt="">
                </div>
                <div class="flex  bg-white w-11/12 my-5 rounded-2xl justify-around mx-2">
                    <div class="w-1/3 flex-col flex space-y-2 justify-start">
                        <h4 class="text-xl font-bold font-lato flex justify-center">Volkswagen Passat</h4>
                        <span class="text-sm text-gray-400 font-lato flex justify-center">Comfortline 1.5 tsi dsg 4 motion</span>
                        <h4 class="text-xl font-lato font-bold flex justify-center mt-10">₺ 459.590</h4>
                    </div>

                    <div class="w-1/3 flex-col flex justify-between pt-5">
                        <div class="flex justify-center">
                            <img src="{{asset('img/Strikethrough@2x 2.png')}}" alt="" class="w-6 h-6">
                        </div>
                        <div class="flex justify-center">
                            <button class="search rounded-lg text-white bg-searchButton w-1/2">
                                karşılaştır
                            </button>
                        </div>
                    </div>

                    <div class="w-1/3 flex-col flex space-y-2 justify-start">
                        <h4 class="text-xl font-bold font-lato flex justify-center">Volkswagen Passat</h4>
                        <span class="text-sm text-gray-400 font-lato flex justify-center">Comfortline 1.5 tsi dsg 4 motion</span>
                        <h4 class="text-xl font-lato font-bold flex justify-center mt-10">₺ 459.590</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="user-comments mt-8 w-full">
    <div class="flex flex-col items-center justify-center">
        <div class="comments-title">
            <h4 class="text-xl font-bold font-lato">kullanıcı yorumları</h4>
        </div>

        <div class="border border-gray-500 rounded-lg w-11/12 p-10 mt-10 flex flex-col">
            <div class="comments-all overflow-hidden overflow-y-scroll flex flex-col divide-y divide-gray-900"
                 style="height: 600px;">
                <div class="py-10">
                    <div class="flex flex-col space-y-3 items-start ">
                        <div class="flex items-start space-x-3 items-center">
                            <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.</div>
                            <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">fiat
                                egea
                            </div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021</div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                        </div>

                        <div class="comment-subject">
                            <p class="font-lato text-sm">pejo20191.5fiyatı ne kadar100bin peşin ne kadar olur</p>
                        </div>

                        <div class="answer">
                            <a href="">
                                <span class="text-xs font-bold font-lato">yanıtla</span>
                            </a>
                        </div>
                    </div>
                    <div class="ml-20 answers">
                        <div class="flex flex-col space-y-3 items-start ">
                            <div class="flex items-start space-x-3 items-center">
                                <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.
                                </div>
                                <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">
                                    fiat egea
                                </div>
                                <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021
                                </div>
                                <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                            </div>

                            <div class="comment-subject">
                                <p class="font-lato text-sm">superb binmeden önce arabaya binmedigimi anladım çok agır
                                    bir araç binerken kendimi çok farklı hissediyorum onun agırlıgı yol</p>
                            </div>

                            <div class="answer">
                                <a href="">
                                    <span class="text-xs font-bold font-lato">yanıtla</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-10">
                    <div class="flex flex-col space-y-3 items-start ">
                        <div class="flex items-start space-x-3 items-center">
                            <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.</div>
                            <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">fiat
                                egea
                            </div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021</div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                        </div>

                        <div class="comment-subject">
                            <p class="font-lato text-sm">pejo20191.5fiyatı ne kadar100bin peşin ne kadar olur</p>
                        </div>

                        <div class="answer">
                            <a href="">
                                <span class="text-xs font-bold font-lato">yanıtla</span>
                            </a>
                        </div>
                    </div>
                    <div class="ml-20 answers">
                        <div class="flex flex-col space-y-3 items-start ">
                            <div class="flex items-start space-x-3 items-center">
                                <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.
                                </div>
                                <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">
                                    fiat egea
                                </div>
                                <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021
                                </div>
                                <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                            </div>

                            <div class="comment-subject">
                                <p class="font-lato text-sm">superb binmeden önce arabaya binmedigimi anladım çok agır
                                    bir araç binerken kendimi çok farklı hissediyorum onun agırlıgı yol</p>
                            </div>

                            <div class="answer">
                                <a href="">
                                    <span class="text-xs font-bold font-lato">yanıtla</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-10">
                    <div class="flex flex-col space-y-3 items-start ">
                        <div class="flex items-start space-x-3 items-center">
                            <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.</div>
                            <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">fiat
                                egea
                            </div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021</div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                        </div>

                        <div class="comment-subject">
                            <p class="font-lato text-sm">pejo20191.5fiyatı ne kadar100bin peşin ne kadar olur</p>
                        </div>

                        <div class="answer">
                            <a href="">
                                <span class="text-xs font-bold font-lato">yanıtla</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="py-10">
                    <div class="flex flex-col space-y-3 items-start ">
                        <div class="flex items-start space-x-3 items-center">
                            <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.</div>
                            <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">fiat
                                egea
                            </div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021</div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                        </div>

                        <div class="comment-subject">
                            <p class="font-lato text-sm">pejo20191.5fiyatı ne kadar100bin peşin ne kadar olur</p>
                        </div>

                        <div class="answer">
                            <a href="">
                                <span class="text-xs font-bold font-lato">yanıtla</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="py-10">
                    <div class="flex flex-col space-y-3 items-start ">
                        <div class="flex items-start space-x-3 items-center">
                            <div class="comment-owner text-sm font-bold font-lato text-searchButton px-2">Hıdır E.</div>
                            <div class="bg-grayBackground text-gray-500 px-2 flex-grow-1 flex-shrink-0 rounded-lg">fiat
                                egea
                            </div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">16.07.2021</div>
                            <div class="comment-owner text-sm font-bold font-lato text-gray-400 px-2">14:35</div>
                        </div>

                        <div class="comment-subject">
                            <p class="font-lato text-sm">pejo20191.5fiyatı ne kadar100bin peşin ne kadar olur</p>
                        </div>

                        <div class="answer">
                            <a href="">
                                <span class="text-xs font-bold font-lato">yanıtla</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="m-5 bg-grayBackground rounded flex px-5 py-5 divide-x divide-gray-600 w-full items-center hover:border-blue-800 hover:border">
                <input type="text" placeholder="yorum yazmak için tıklayın" class="text-sm text-gray-800 w-full bg-grayBackground focus:outline-none">
                <a href="" class="flex justify-center bg-searchButton px-3 py-6 text-white font-lato rounded-2xl">
                    gönder
                </a>
            </div>
        </div>
    </div>
</div>


<div class="footer w-full">
    <div class="flex flex-col w-11/12 mx-auto mt-10">
        <div class="w-full flex flex-row justify-between items-start">
            <div class="w-2/5 flex flex-col space-y-5">
                <div>
                    <img src="{{asset('img/ab-sifir-km-logo 1.png')}}" alt="">
                </div>
                <div class="models w-full flex flex-col justify-center">
                    <h4 class="text-lg font-bold font-lato items-start flex justify-start">Markalar</h4>
                    <div class="flex items-center flex-wrap space-y-3">
                        <div class="w-1/2">
                            <h4>Honda</h4>
                        </div>
                        <div class="w-1/2">
                            <h4>Honda</h4>
                        </div>
                        <div class="w-1/2">
                            <h4>Honda</h4>
                        </div>
                        <div class="w-1/2">
                            <h4>Honda</h4>
                        </div>
                        <div class="w-1/2">
                            <h4>Honda</h4>
                        </div>
                        <div class="w-1/2">
                            <h4>Honda</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-3/5 flex flex-col space-y-5">
                <div class="flex items-center justify-end space-x-10 mb-10">
                    <div class="flex space-x-3">
                        <div
                            class="w-8 h-8 flex justify-center items-center shadow-2xl rounded-full border border-gray-800 hover:border-blue-300">
                            <img src="{{asset('img/apple.png')}}" alt="">
                        </div>
                        <div
                            class="w-8 h-8 flex justify-center items-center shadow-2xl rounded-full border border-gray-800 hover:border-blue-300">
                            <img src="{{asset('img/apple.png')}}" alt="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div
                            class="w-8 h-8 flex justify-center items-center shadow-2xl rounded-full border border-gray-800 hover:border-blue-300">
                            <img src="{{asset('img/apple.png')}}" alt="">
                        </div>
                        <div
                            class="w-8 h-8 flex justify-center items-center shadow-2xl rounded-full border border-gray-800 hover:border-blue-300">
                            <img src="{{asset('img/apple.png')}}" alt="">
                        </div>
                        <div
                            class="w-8 h-8 flex justify-center items-center shadow-2xl rounded-full border border-gray-800 hover:border-blue-300">
                            <img src="{{asset('img/apple.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-row items-start justify-start">
                    <div class="w-1/3 flex flex-col space-y-2 items-start justify-start">
                        <h4 class="text-lg font-bold font-lato items-start flex justify-start">Kurumsal</h4>
                        <div class="flex flex-col justify-start w-full"></div>
                        <span>Hakkımızda</span>
                        <span>Kurumsal</span>
                        <span>İletişim</span>
                    </div>
                    <div class="w-1/3 flex flex-col space-y-2 items-start justify-start">
                        <h4 class="text-lg font-bold font-lato items-start flex justify-start">Kurumsal</h4>
                        <div class="flex flex-col justify-start w-full"></div>
                        <span>Hakkımızda</span>
                        <span>Kurumsal</span>
                        <span>İletişim</span>
                    </div>
                    <div class="w-1/3 flex flex-col space-y-2 items-start justify-start">
                        <h4 class="text-lg font-bold font-lato items-start flex justify-start">Kurumsal</h4>
                        <div class="flex flex-col justify-start w-full"></div>
                        <span>Hakkımızda</span>
                        <span>Kurumsal</span>
                        <span>İletişim</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center my-10">
            ©  2021 aracbul.com tüm hakları saklıdır.
        </div>
    </div>
</div>

</div>


</body>
