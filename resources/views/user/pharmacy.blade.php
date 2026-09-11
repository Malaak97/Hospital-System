<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - Pharmacy</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>

    <a href="{{ route('user.index') }}" class="back"> Back to Home</a>
    <h1 align="center">Medicines</h1>
    <p>A group of medicines and medical supplies available at the hospital</p>
    <section class="section-grid">
        <div class="item">
            <img src="{{asset('images/antibiotics.png')}}">
            <h3>Antibiotics</h3>
            <p>Treatment of bacterial infections</p>
        </div>
        <div class="item">
            <img src="{{asset('images/painkillers.png')}}">
            <h3>Painkillers</h3>
            <p>Relieve pain and reduce fever</p>
        </div>
        <div class="item">
            <img src="{{asset('images/heart.png')}}">
            <h3>Heart &amp; BP</h3>
            <p>Regulate blood pressure and heart health</p>
        </div>
        <div class="item">
            <img src="{{asset('images/neurology.png')}}">
            <h3>Brain &amp; Nerves</h3>
            <p>Improve brain and nerve functions</p>
        </div>
        <div class="item">
            <img src="{{asset('images/stomach.png')}}">
            <h3>Stomach &amp; Colon</h3>
            <p>Digestive system problems</p>
        </div>
        <div class="item">
            <img src="{{asset('images/lungs.png')}}">
            <h3>Respiratory</h3>
            <p>Asthma and respiratory diseases</p>
        </div>
        <div class="item">
            <img src="{{asset('images/ent.png')}}">
            <h3>ENT</h3>
            <p>Ear, nose and throat problems</p>
        </div>
        <div class="item">
            <img src="{{asset('images/orthopedics.png')}}">
            <h3>Bones &amp; Joints</h3>
            <p>Strengthen bones and relieve pain</p>
        </div>
        <div class="item">
            <img src="{{asset('images/ophthalmology.png')}}">
            <h3>Ophthalmology</h3>
            <p>Eye problems and inflammation</p>
        </div>
    </section>
    <footer>&copy; 2026 Hospital Management</footer>
    <script src="{{asset('main.js')}}"></script>
</body>

</html>
