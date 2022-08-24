@include('hospital.HospitalNavLinks')


<table class="table mt-lg-5">

    <tr>
        <th scope="col">Ambulance Registration Number</th>
        <th scope="col">Hospital Name</th>
        <th scope="col">Driver Name</th>
        <th scope="col">Driver Contact Number</th>
        <th scope="col">Remove Ambulance</th>
    </tr>

    <tbody>
        @foreach ($AmbulanceT as $Ambulance)
        <tr>
        <td>{{ $Ambulance->AmbulanceRegNo}}</td>
            <td>{{ $Ambulance->HospitalName }}</td>
            <td>{{ $Ambulance->DriverName }}</td>
            <td>{{ $Ambulance->DriverNumber }}</td>





            <td>    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('RemoveAmbulance',$Ambulance->id) }} ">Remove</a>

                {{-- @if ($doctor->username == $username)
                @else
                <h1  style=" color:rgb(225, 16, 16) ;font-size:26px; font-weight:bold;">Remvoed</h1>
                @endif --}}
            </td>




        </tr>
        @endforeach
    </tbody>
</table>
