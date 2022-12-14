<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/AddDoctor/style.css') }}">

<nav class="navbar navbar-dark  navbar-expand-lg sticky-top " id="navbar" >
    <div class="container-fluid">
        <a class="navbar-brand" id="navbarScrollingDropdown" href="{{ url('/redirects') }}">The Rescuer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">

        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li>
                    <a class="nav-link " href="{{ url('#') }}" id="navbarScrollingDropdown">
                        Complain History
                    </a>
                </li>


                <li class="nav-item dropdown">


                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                         Fire fighters
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" id="dropItems" href="{{ url('AddFirefighters') }}">Add firefighters</a></li>
                        <li><a class="dropdown-item" id="dropItems" href="{{ url('DeleteFirefighters') }}">Remove firefighters</a></li>
                        <li><a class="dropdown-item" id="dropItems" href="{{ url('SeeFirefightersList') }}">Check firefighters list</a></li>

                    </ul>
                </li>

            
        @if (Route::has('login'))
    @auth

        <li class="nav-item " id="LoginStatuslayout">
            <x-app-layout>

            </x-app-layout>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" id="btn" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" id="btn" href="#">Register</a>
        </li>
        @endif
    @endauth
        </ul>
    {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
    </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
