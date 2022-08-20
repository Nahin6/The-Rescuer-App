<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

<nav class="navbar navbar-dark  navbar-expand-lg  " id="navbar" ">
    <div class="container-fluid">
        <a class="navbar-brand" id="navbarScrollingDropdown" href="/">The Rescuer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

                  <li class="nav-item" id="navbutton">
                    <a class="btn btn-primary" aria-current="page" id="btn" href="{{ route('login') }}">Login</a>
                  </li>
                  <li class="nav-item " id="navbutton-one">
                    <a class="btn btn-primary " aria-current="page" id="btn" href="{{ route('register') }}">Register</a>
                  </li>
            </ul>

        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
