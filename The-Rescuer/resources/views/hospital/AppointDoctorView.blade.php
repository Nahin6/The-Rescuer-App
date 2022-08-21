{{-- nav  --}}
@include('hospital.HospitalNavLinks')


{{-- nav close --}}

<section class="SignUp-section">
    <form class="col-lg-5 col-md-7 col-sm-8 col-10 shadow p-5 text-center" id="SIgnup-design" method="POST"
        action="{{ url('MakeAppointment') }}" enctype="multipart/form-data">
        @csrf
        @if (session()->has('confirmation'))
            <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('confirmation') }}

            </div>
        @endif
        <p style="font-weight: 900; font-size: 40px; color: rgb(173, 37, 27);">Get Doctor help</p>
        <br>
        <label for="Address" class="form-label">Select a Doctor:</label>
        <select name="AppointmentType" id="form-design" style="width: 100%; text-align: center">>
            @foreach ($doctorT as $Doctor)
            <option value="{{ $Doctor->username }}">{{ $Doctor->username }}</option>
            @endforeach
        </select>
        <label for="Address" class="form-label mt-4">Your Age:</label>
        <input type="text" name="Age" placeholder="Age" class=" form-control my-3 py-3 p-1"
            id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Age '" required>

        <label for="Address" class="form-label mt-4">Describe your Problems:</label>
        <input type="textarea" name="Problems" placeholder="Details " class=" form-control my-3 py-3 p-1"
            id="form-designText"onfocus="this.placeholder=''" onblur="this.placeholder='Details '" required>
{{--
        <label for="gender" id="gender" class="mt-4">
            Gender :</label>

        <br> <input type="radio" name="gender" value="Male" name="gender" required>

        <label for="ma">Male</label>
        <input type="radio" id="fe" value="Female" name="gender">
        <label for="fe">Female</label> --}}
        <br> <br>

        <button type="submit" name="submitButton" class="btn my-2 py-2" id="button-login">Submit
            Request</button>





    </form>

