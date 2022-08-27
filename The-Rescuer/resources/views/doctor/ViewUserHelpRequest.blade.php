


{{-- nav --}}

@include('doctor.DoctorNavLinks')

{{-- nav close --}}
{{--
<div class="page-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="font-weight-normal">Received Problems</h1>
                <div class="row">
                    @foreach ($AppointmentT as $Appointment)
                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">

                                <div class="body">
                                    <p class="text-l mb-0 "> Appointment Received From: {{ $Appointment->PatientName }}
                                    </p>
                                    <p class="text-l mb-0">Patients Contact Number :{{ $Appointment->ContactNumber }}
                                    </p>
                                    <p class="text-l mb-0">Patient Location:{{ $Appointment->Address }}</p>
                                    <p class="text-l mb-0">Patients require help for :
                                        {{ $Appointment->AppointmentType }} </p>
                                    <p class="text-l mb-0">Patient Age : {{ $Appointment->Age }} </p>
                                    <p class="text-l mb-0">Appointment Status : {{ $Appointment->status }} </p>
                                    <p class="text-l mb-0">Patients Gender : {{ $Appointment->gender }}</p>
                                    </p>
                                    <p class="text-l mb-0">Detail message : {{ $Appointment->Problems }}</p>
                                    </p>

                                    @if ($Appointment->status =='Approved Please wait for doctor response')

                                        <a type="button" class="btn btn-primary bg-black m-2"
                                            href="{{ url('GiveSolutionToUser', $Appointment->id) }}">Give Solution</a>

                                    @else
                                        <h1
                                            style="text-align:center; color:rgb(15, 142, 49) ;font-size:30px; font-weight:bold;">
                                            Solved</h1>

                                    @endif
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
</div> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- nav --}}

    {{-- nav  close --}}

    <table class="table mt-lg-5">

        <tr style="background-color: rgb(123, 60, 60);"> >
            <th scope="col" class="table_responsive">Patient Name</th>
            <th scope="col" class="table_responsive">Patient Contact Number</th>
            <th scope="col" class="table_responsive">Patient Location</th>
            <th scope="col" class="table_responsive">Patient Age</th>
            <th scope="col" class="table_responsive">Patients Gender</th>
            <th scope="col" class="table_responsive">Patients need helps for</th>
            <th scope="col" class="table_responsive">Detail message</th>
            <th scope="col" class="table_responsive">Give solution</th>
        </tr>

        <tbody>
            @foreach ($AppointmentT as $Appointment)
            <tr style="background-color: rgb(125, 114, 114);">
                <td class="table_responsive">{{ $Appointment->PatientName }}</td>
                <td class="table_responsive">{{ $Appointment->ContactNumber }}</td>
                <td class="table_responsive">{{ $Appointment->Address }}</td>
                <td class="table_responsive">{{ $Appointment->Age }}</td>
                <td class="table_responsive">{{ $Appointment->gender }}</td>
                <td class="table_responsive">{{ $Appointment->AppointmentType }}</td>
                <td class="table_responsive">{{ $Appointment->Problems }}</td>


                <td>   @if ($Appointment->status =='Forward to a doctor')
                    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)";  class="btn btn-danger  m-2" href="{{ url('GiveSolutionToUser') }} ">Solution</a>

                    @else
                        <h1  style=" color:rgb(15, 142, 49) ;font-size:26px; font-weight:bold;">Solved</h1>


                    @endif
                </td>




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



</body>

</html>
