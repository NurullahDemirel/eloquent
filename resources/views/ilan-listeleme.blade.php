<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>

<x-second-hand-nav/>

<div class="flex space-x-2 items-start">
    <x-second-hand-filter-left />

    <div class="filter-result w-4/6  rounded bg-white flex space-x-20 justify-start flex-wrap w-full">
        <div class="flex space-x-8 space-y-4 flex-wrap mx-auto w-11/12 justify-start">
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
            <x-second-hand-car-card />
        </div>

    </div>
</div>


</body>
