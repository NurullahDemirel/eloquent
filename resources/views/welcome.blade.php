<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="car-component border border-borderColo rounded-3xl mx-auto mt-52 mb-52 bg-white h-auto"
     style="width: 440px;">

    <div class="car-img m-4 rounded-lg rounded-t-2xl" >
        <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-3xl max-w-full mb-4">
    </div>

    <div class="car-price">
            <div class="flex space-x-2 items-center">
            <div class="uppercase text-2xl ml-3 font-bold"> ₺ 450.900</div>
            <div class="flex items-center space-x-3 rounded-lg py-2 text-white divide-x divide-white" style="background-color: rgba(4, 119, 191, 1)">
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

    <div class="ilan-datay flex justify-center my-5">
        <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
            İlan Detayı
        </button>
    </div>

</div>

</body>
