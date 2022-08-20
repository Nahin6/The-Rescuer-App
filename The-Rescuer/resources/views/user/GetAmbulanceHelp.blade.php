@include('user.NavWithLinks')

<section class="SignUp-section">


    <form class="col-lg-5 col-md-7 col-sm-8 col-10 shadow p-5 text-center" id="SIgnup-design" method="POST"
        action="{{ url('AddAmbulanceSubmitButton') }}" enctype="multipart/form-data">
        @csrf
        @if (session()->has('success'))
            <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('success') }}

            </div>
        @endif
        <p style="font-weight: 900; font-size: 40px; color: rgb(173, 37, 27);"> Add Ambulance for your Hospital</p>
        <br>



        <label for="AmbulanceRegNo" class="form-label">Enter Ambulance Registration Number
            :</label>
        <input type="text" name="AmbulanceRegNo" placeholder=" Registration Number"
            class=" form-control my-3 py-3 p-1" id="form-design" onfocus="this.placeholder=''"
            onblur="this.placeholder=' Registration Number'" required>
        <label for="DriverName" class="form-label">Enter Driver Name:</label>
        <input type="text" name="DriverName" placeholder="Enter Driver Name" class=" form-control my-3 py-3 p-1"
            id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Enter Driver Name'" required>
        <label for="DriverNumber" class="form-label">Enter Driver Contact Number:</label>
        <input type="number" name="DriverNumber" placeholder="Driver Contact Number"
            class=" form-control my-3 py-3 p-1" id="form-design"onfocus="this.placeholder=''"
            onblur="this.placeholder='Driver Contact Number'" required>
        <br> <br>

        <button type="submit" name="submitButton" class="btn my-2 py-2" id="button-login">Add Ambulance</button>

    </form>


</section>


{{-- nav --}}
@include('admin.AdminFooter')
{{-- nav  close --}}
