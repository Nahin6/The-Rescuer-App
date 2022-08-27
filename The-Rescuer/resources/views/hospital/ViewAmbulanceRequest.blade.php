
@include('hospital.HospitalNavLinks')
<table class="table mt-lg-5">

    <tr>
        <th scope="col">Name of passenger</th>
        <th scope="col">Passenger's Number</th>
        <th scope="col">Passenger's Location where Ambulance wanted</th>
        <th scope="col">Current Status</th>
        <th scope="col">Approve</th>
        <th scope="col">Decline</th>
    </tr>

    <tbody>
        @foreach ($AmbulanceReqT as $AmbulanceReqT)
        <tr>
            <td>{{ $AmbulanceReqT->username}}</td>
            <td>{{ $AmbulanceReqT->ContactNumber }}</td>
            <td>{{ $AmbulanceReqT->Location }}</td>
            <td>{{ $AmbulanceReqT->AmnulanceStatus }}</td>




            <td>    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(21, 210, 81)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('ApproveAmbulanceRequest',$AmbulanceReqT->id) }} ">Approve</a>

                {{-- @if ($doctor->username == $username)
                @else
                <h1  style=" color:rgb(225, 16, 16) ;font-size:26px; font-weight:bold;">Remvoed</h1>
                @endif --}}
            </td>
            <td>    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('RemoveAmbulanceRequest',$AmbulanceReqT->id) }} ">Decline</a>

                {{-- @if ($doctor->username == $username)
                @else
                <h1  style=" color:rgb(225, 16, 16) ;font-size:26px; font-weight:bold;">Remvoed</h1>
                @endif --}}
            </td>




        </tr>
        @endforeach
    </tbody>
</table>
