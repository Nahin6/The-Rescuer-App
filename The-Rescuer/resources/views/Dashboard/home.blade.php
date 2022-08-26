<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Rescuer</title>
</head>
<body>

    {{-- nav --}}
    @include('Dashboard.NavWithLinks')

  {{-- nav close--}}

  @include('Dashboard.CoverPhoto')
{{-- SeeDoctor --}}

{{-- SeeDoctor close --}}

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
    tabindex="0">
  <div class=About_Us>
    <div class="NavAboutUs " id="AboutUs">
      <h1 class="HoverAboutUs">About us </h1>
      <h3>This application will have functions that are necessary for a general user’s safety. This application will have a set of buttons which will help the user to send emergency messages to the friends added on the system, on the application and to the nearby police stations, hospitals and fire stations accordingly respectively. This application will help to send automated calls which will say that the user is in trouble and should track her number now. This application is used to help women or girls or anyone in need of danger. It can be used to track the daily route of the user and track the user’s number if in need. This application can ask for doctor’s advice and emergency ambulance if needed in emergency situations. It can also ask for help from fire stations and firefighters in an emergency of fire incidents. And provide daily life awareness routines to the general user.</h3>
    </div>
<div id="MedicalHelp">
      <h1 class="HoverAboutUs">Medical help</h1>
      @include('Dashboard.Medicalpic')
      <h3>In case of medical emergency if a user needs medical advice from a doctor, then he/she can press the button and fill up the form regarding his/her illness and wait for the doctor’s feedback and advice. And if the user needs an ambulance for medical emergencies, then must choose the button for ambulance so a message will be sent to hospital. The hospital stuff will be able to send ambulance to the shared location of the user.</h3>
    </div>

    <div id="PoliceHelp">
      <h1 class="HoverAboutUs">Police help</h1>
      
      <h3>If a person is in danger and needs police help then he/she can press the police help button and a message to the nearest police station and friends added to the general user. The message will be indicating that the user is in danger so his/her friends and police will be able to trace the user as the user’s location is shared to the police and his/her friends. They can come and help him/her out from the danger.</h3>
    </div>

    <div id="FireHelp">
      <h1 class="HoverAboutUs">Fire help</h1>
      @include('Dashboard.Firepic')
      <h3 id="wordsoffire">If a person is in a fire related emergency, then he/she can press fire help button. By pressing the button, the user will be sending a message to the fire station that he/she needs firefighters and there is a fire emergency. Through the message the user will be automatically sharing the location of the user and firefighters and fire station will be able to trace the location and send help.</h3>
    </div>

  </div>
</div>

</body>
</html>








