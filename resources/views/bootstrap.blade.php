<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center" style="height: 600px">
<div class="border h-auto overflow-hidden d-flex flex-column rounded-lg" style="width: 440px; height: 400px">
    <div class="car-img m-4 rounded-lg ">
        <img src="https://via.placeholder.com/590x260?text=My Car" alt="Car" class="rounded-lg max-w-full mb-4">
    </div>
    <div class="car-price">
        <div class="d-flex space-x-2 align-items-center">
            <div class="text-uppercase  ml-3 font-weight-bold"> ₺ 450.900</div>
            <div class="d-flex align-items-center  rounded-lg py-2 text-white" style="background-color: rgba(4, 119, 191, 1)">
                <div class="d-flex items-center space-x-3 ml-4">
                    <img src="{{asset('img/smile 12.png')}}" alt="">
                    <div class="pr-2  border-right border-white ">
                        harika fiyat
                    </div>
                </div>
                <div class="px-2"><small>₺ 28.400 piyasanın altında</small></div>
            </div>
        </div>
    </div>

    <div class="car-title d-flex justify-content-center mt-10">
        <h4 class="d-flex align-content-center">Mercedes-Benz C Serisi C 200d BlueTec..</h4>
    </div>

    <div class="row m-1 d-flex justify-content-center  py-8">
        <div class="col-4 d-flex align-items-center">
            <span><i class="fas fa-star text-blue-500 pr-3"></i></span>
            <div class="properties">
                <span>Benzin</span>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center">
            <span><i class="fas fa-star text-blue-500 pr-1"></i></span>
            <div class="properties">
                <span>180 bg</span>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center">
            <span><i class="fas fa-star text-blue-500 pr-1"></i></span>
            <div class="properties">
                <span>123.050 km</span>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center m-1 ">
        <div class="col-4 d-flex align-items-center">
            <span><i class="fas fa-star text-blue-500 pr-1"></i></span>
            <div class="properties">
                <span>Otomatik</span>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center">
            <span><i class="fas fa-star text-blue-500 pr-1"></i></span>
            <div class="properties">
                <span>6.6 Lt</span>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center">
            <span><i class="fas fa-star text-blue-500 pr-1"></i></span>
            <div class="properties">
                <span>2017</span>
            </div>
        </div>
    </div>

    <div class="ilan-datay d-flex justify-content-center mb-4 mt-4 m-auto">
        <button class="bg-transparent  text-blue-700 font-semibold py-2 px-4 border border-blue-500  rounded">
            İlan Detayı
        </button>
    </div>


</div>

</body>
