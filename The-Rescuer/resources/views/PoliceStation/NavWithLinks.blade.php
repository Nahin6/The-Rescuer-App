<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/PoliceStation/style.css') }}">


<nav class="navbar navbar-dark  navbar-expand-lg  sticky-top" id="navbar" >
    <div class="container-fluid">
        <a class="navbar-brand" id="navbarScrollingDropdown" href="{{ url('/redirects') }}">The Rescuer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScrollingDropdown">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" href="#">Complains History</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Police
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                        <li><a class="dropdown-item" id="dropItems"id="dropItems" href="">Add Police</a></li>
                        <li><a class="dropdown-item" id="dropItems"  href="#">Remove Police</a></li>
                        <li><a class="dropdown-item" id="dropItems" href="#">Check police list</a></li>
=======

                        <li><a class="dropdown-item" href="{{ url('AddPolice') }}">Add Police</a></li>
                        <li><a class="dropdown-item" href="#">Remove Police</a></li>
                        <li><a class="dropdown-item" href="#">Check police list</a></li>

                        

>>>>>>> a103fc4d398472f60ce376222e6dad4564f78c9b
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
