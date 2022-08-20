<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('css/hospital/AddDoctor/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/User/PoliceHelp.css') }}">
    <title>PoliceHelp</title>
</head>

<body>

    {{-- nav --}}
    @include('user.NavWithLinks')
    {{-- nav  close --}}
    
    <div id="police_help">
        <p>The Police is on the way</p>
    </div>

    </section>
    {{-- nav --}}
    @include('admin.AdminFooter')
    {{-- nav  close --}}
</body>

</html>

