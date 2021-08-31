<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="bg-blue-200">
    <div class="text-white my-8 w-128 mx-auto">
        <div class="text-gray-800 ">
            <input type="text" class="w-full">
        </div>

        <div class="weather-container font-sans w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg mt-4">
            <div class="current-weather flex items-center justify-between px-6 py-6">
                <div class="flex items-center">
                    <div>
                        <div class="text-6xl font-semibold">
                            8°C
                        </div>
                        <div class="mt-2">
                            Feels like 2°C
                        </div>
                    </div>
                    <div class="mx-5">
                        <div class="font-semibold">Cloudy</div>
                        <div class="font-semibold">Toronto,Canada</div>
                    </div>
                </div>
                <div>icon</div>
            </div>
        </div>

        <div class="weather-future text-sm bg-gray-800 px-6 py-8 overflow-hidden">
            <div class="flex items-center mt-5">
                <div class="w-1/6 text-gray-200">
                    MON
                </div>
                <div class="w-4/6 flex items-center">
                    <div>icon</div>
                    <div class="ml-3">Cloudy with a chance showers</div>
                </div>
                <div class="w-1/6 text-right">
                <div>5°C</div>
                <div>-2°C</div>
                </div>
            </div>
            <div class="flex items-center mt-5">
                <div class="w-1/6 text-gray-200">
                    MON
                </div>
                <div class="w-4/6 flex items-center">
                    <div>icon</div>
                    <div class="ml-3">Cloudy with a chance showers</div>
                </div>
                <div class="w-1/6 text-right">
                <div>5°C</div>
                <div>-2°C</div>
                </div>
            </div>
        </div>
    </div>



</body>
