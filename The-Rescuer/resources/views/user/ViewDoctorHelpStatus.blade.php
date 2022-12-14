

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('user.NavWithLinks')
    <table class="table mt-lg-5">

        <tr>
            <th scope="col">Your Name</th>
            <th scope="col">You Asked for help of</th>
            <th scope="col">Your Gender</th>
            <th scope="col">Status</th>
            <th scope="col">Cancel Request</th>
        </tr>

        <tbody>
            @foreach ($AppointmentT as $Appointment)
            <tr>
                <td>{{ $Appointment->PatientName }}</td>
                <td>{{ $Appointment->AppointmentType }}</td>
                <td>{{ $Appointment->gender }}</td>
                <td>{{ $Appointment->status }}</td>




                <td>   @if ($Appointment->status =='Pending')
                    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('CancelRequest',$Appointment->id) }} ">Cancel</a>

                    @else
                        <h1  style=" color:rgb(15, 142, 49) ;font-size:26px; font-weight:bold;">Accepted</h1>


                    @endif
                </td>




            </tr>
            @endforeach
        </tbody>
    </table>



        @include('user.ViewDoctorFeedBack')
</body>
</html>
