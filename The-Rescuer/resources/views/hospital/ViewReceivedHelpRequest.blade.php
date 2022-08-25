{{-- nav --}}
@include('hospital.HospitalNavLinks')


{{-- nav close --}}

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

                                    @if ($Appointment->status =='Pending')

                                        <a type="button" class="btn btn-primary bg-black m-2"
                                            href="{{ url('AppointDoctor', $Appointment->id) }}">Appoint Doctor</a>

                                    @else
                                        <h1
                                            style="text-align:center; color:rgb(15, 142, 49) ;font-size:30px; font-weight:bold;">
                                            Appointed</h1>

                                    @endif
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
</div>
