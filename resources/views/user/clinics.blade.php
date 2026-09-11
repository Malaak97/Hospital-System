<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - Clinics</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>

    <a href="{{ route('user.index') }}" class="back"> Back to Home</a>

    <h1 align="center">Outpatient Clinics</h1>
    <p>A group of specialized clinics for the best healthcare</p>

    <section class="section-grid">
        <div class="item">
            <img src="{{asset('images/internal.png')}}">
            <h3>Internal Clinic</h3>
            <p>Diagnosis and treatment of internal diseases</p>
        </div>
        <div class="item">
            <img src="{{asset('images/pediatrics.png')}}">
            <h3>Pediatrics</h3>
            <p>Comprehensive child healthcare</p>
        </div>
        <div class="item">
            <img src="{{asset('images/orthopedics.png')}}">
            <h3>Orthopedics</h3>
            <p>Bones, joints and injuries</p>
        </div>
        <div class="item">
            <img src="{{asset('images/neurology.png')}}">
            <h3>Neurology</h3>
            <p>Brain and nerves diseases</p>
        </div>
        <div class="item">
            <img src="{{asset('images/dentistry.png')}}">
            <h3>Dentistry</h3>
            <p>Teeth treatment and cosmetics</p>
        </div>
        <div class="item">
            <img src="{{asset('images/gynecology.png')}}">
            <h3>Gynecology</h3>
            <p>Pregnancy and women's health</p>
        </div>
        <div class="item">
            <img src="{{asset('images/ent.png')}}">
            <h3>ENT</h3>
            <p>Ear, nose and throat</p>
        </div>
        <div class="item">
            <img src="{{asset('images/surgery.png')}}">
            <h3>Surgery</h3>
            <p>Post-surgery follow-up</p>
        </div>
        <div class="item">
            <img src="{{asset('images/ophthalmology.png')}}">
            <h3>Ophthalmology</h3>
            <p>Eye diseases and treatment</p>
        </div>
    </section>
    <h1 align="center"> show وهنا ممكن يعمل backend حط جدول الاطباء المتاحين يا </h1>
    <footer>&copy; 2026 Hospital Management</footer>
    <script src="{{asset('main.js')}}"></script>
</body>

</html>
