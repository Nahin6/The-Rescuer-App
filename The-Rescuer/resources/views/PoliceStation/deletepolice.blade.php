@include('PoliceStation.NavWithLinks')
<table class="table mt-lg-5">

    <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Department</th>
        <th scope="col">Position</th>
        <th scope="col">Remove Police</th>
    
    </tr>

    <tbody>
        @foreach ($Police_t as $Police)
        <tr>
            <td>{{ $Police->id}}</td>
            <td>{{ $Police->first_name}}</td>
            <td>{{ $Police->last_name }}</td>
            <td>{{ $Police->email }}</td>
            <td>{{ $Police->ContactNumber }}</td>
            <td>{{ $Police->Department }}</td>
            <td>{{ $Police->Position }}</td>
            <td><a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('RemovePolice',$Police->id) }} ">Remove</a></td>

        </tr>
        @endforeach
    </tbody>
</table