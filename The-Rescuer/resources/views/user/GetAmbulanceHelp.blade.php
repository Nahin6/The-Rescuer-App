@include('user.NavWithLinks')

<section class="SignUp-section">


    <form class="col-lg-5 col-md-7 col-sm-8 col-10 shadow p-5 text-center" id="SIgnup-design" method="POST"
        action="{{ url('RequestForAmbulance') }}" enctype="multipart/form-data">
        @csrf
        @if (session()->has('confirmation'))
            <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('confirmation') }}

            </div>
        @endif
        <p style="font-weight: 900; font-size: 40px; color: rgb(173, 37, 27);">Request for a Ambulance</p>
        <br>



        <label for="AmbulanceRegNo" class="form-label">Give your Location
            :</label>
        <input type="text" name="Location" placeholder="Location where you want Ambulance"
            class=" form-control my-3 py-3 p-1" id="address" onfocus="this.placeholder=''"
            onblur="this.placeholder='Location where you want Ambulance'" required>

        <br> <br>

        <button type="submit" name="submitButton" class="btn my-2 py-2" id="button-login">Submit Request</button>

    </form>


</section>
<script type="text/javascript">
    $(document).ready(function() {
        var autoComplete;
        var id = 'address';
        autoComplete = new google.maps.places.Autocomplete(document.getElementById(id)), {
            types: ['geocode'],
        };

        google.maps.event.addListener(autoComplete, 'place_changed', function() {
            var place = autoComplete.getPlace();

        });


    });
</script>

{{-- nav --}}
@include('admin.AdminFooter')
{{-- nav  close --}}
