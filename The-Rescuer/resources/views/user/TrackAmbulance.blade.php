@include('user.NavWithLinks')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>

<body>
    {{-- nav --}}

    {{-- nav  close --}}
{{-- <h1 class="page-header">Track Ambulance Information</h1> --}}
    <table class="table mt-lg-5">

        <tr style="background-color: rgb(7, 136, 97);">
            <th scope="col" class="tableDesgin">Your Name</th>
            <th scope="col" class="tableDesgin">Contact Number</th>
            <th scope="col" class="tableDesgin">Your Given Location</th>
            <th scope="col" class="tableDesgin">Status</th>

        </tr>

        <tbody>
            @foreach ($AmbulanceReqT as $AmbulanceReq)
            <tr>
                <td class="tableDesgin">{{ $AmbulanceReq->username }}</td>
                <td class="tableDesgin">{{ $AmbulanceReq->ContactNumber }}</td>
                <td class="tableDesgin">{{ $AmbulanceReq->Location }}</td>
                <td class="tableDesgin">{{ $AmbulanceReq->AmnulanceStatus }}</td>





                {{-- <td>   @if ($Appointment->status =='Pending')
                    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('CancelRequest',$Appointment->id) }} ">Cancel</a>

                    @else
                        <h1  style=" color:rgb(15, 142, 49) ;font-size:26px; font-weight:bold;">Accepted</h1>


                    @endif
                </td> --}}




            </tr>
            @endforeach
        </tbody>
    </table>


    {{-- @if (session()->has('confirm'))
    <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session()->get('confirm') }}

    </div>
@endif --}}
@include('user.ViewAssignAmbulance')


</body>

</html>
