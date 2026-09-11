<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>

    <center>
        <img src="{{asset('images/hospital icon.png')}}" width="90" height="90">
    </center>

    <h1 align="center" id="welcomeTitle">Welcome to AlHayat Hospital ,</h1>
    <p>Choose what you want to access</p>

    <section class="dashboard">
        <a href="{{route('user.operations')}}" class="card">
            <img src="{{asset('images/operations.png')}}">
            <h3>Operations</h3>
            <p>All surgical operations available at the hospital</p>
        </a>

        <a href="{{ route('user.emergency') }}" class="card">
            <img src="{{asset('images/emergency.png')}}">
            <h3>Emergency</h3>
            <p>Urgent medical services</p>
        </a>

        <a href="{{ route('user.clinics') }}" class="card">
            <img src="{{asset('images/clinics.png')}}">
            <h3>Outpatient Clinics</h3>
            <p>Specialized clinics for the best healthcare</p>
        </a>

        <a href="{{ route('user.pharmacy') }}" class="card">
            <img src="{{asset('images/pharmacy.png')}}">
            <h3>Medicines</h3>
            <p>Available medicines and supplies</p>
        </a>
    </section>
    <footer>&copy; 2026 Hospital Management</footer>

</body>

</html>
