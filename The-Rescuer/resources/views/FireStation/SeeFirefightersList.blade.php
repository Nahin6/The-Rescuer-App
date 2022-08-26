@include('FireStation.NavWithLinks')


<table class="table mt-lg-5">

    <tr>
        <th scope="col">Name</th>
        <th scope="col">Fires Station Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Department</th>
        <th scope="col">Position</th>
        <th scope="col">Remove Firefighter</th>
    </tr>

    <tbody>
        @foreach ($FireFighter_t as $FireFighter)
        <tr>
        <td>{{ $FireFighter->username}}</td>
            <td>{{ $FireFighter->FireStationName }}</td>
            <td>{{ $FireFighter->email }}</td>
            <td>{{ $FireFighter->ContactNumber }}</td>
            <td>{{ $FireFighter->Department }}</td>
            <td>{{ $FireFighter->Position }}</td>




            <td>    <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('RemoveFirefighters',$FireFighter->id) }} ">Remove</a>

                {{-- @if ($doctor->username == $username)
                @else
                <h1  style=" color:rgb(225, 16, 16) ;font-size:26px; font-weight:bold;">Remvoed</h1>
                @endif --}}
            </td>




        </tr>
        @endforeach
    </tbody>
</table>
