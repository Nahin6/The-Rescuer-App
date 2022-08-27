@include('doctor.DoctorNavLinks')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>




    <section class="SignUp-section">


        <form class="col-lg-5 col-md-7 col-sm-8 col-10 shadow p-5 text-center" id="SIgnup-designOfdoc" method="POST"
            action="{{ url('SubmitSolutionToUser') }}" enctype="multipart/form-data">
            @csrf
            @if (session()->has('success'))
                <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('success') }}

                </div>
            @endif
            <p style="font-weight: 900; font-size: 40px; color: rgb(173, 37, 27);">Provied proper solution to Patient</p>
            <br>



            <label for="AmbulanceRegNo" class="form-label">Enter required medicine name
                :</label>
            <input type="text" name="MedicineName" placeholder="Medicine Name"
                class=" form-control my-3 py-3 p-1" id="form-design" onfocus="this.placeholder=''"
                onblur="this.placeholder='Medicine Name'" required>
            <label for="DriverName" class="form-label">Enter Addtional Medicine Name:</label>
            <input type="text" name="AddtionalMedicine" placeholder="If not required leave blank or type N/A" class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='If not required leave blank or type N/A'" required>
            <label for="DriverNumber" class="form-label">Write a details message with proper guide line:</label>
            <input type="textarea" name="GuideLine" placeholder="Proper Guide Line"
                class=" form-control my-3 py-3 p-1" id="form-design"onfocus="this.placeholder=''"
                onblur="this.placeholder='Proper Guide Line'" required>
            <br> <br>

            <button type="submit" name="submitButton" class="btn my-2 py-2" id="button-login">Submit solution</button>



        </form>


        </form>

    </section>


</body>

</html>
