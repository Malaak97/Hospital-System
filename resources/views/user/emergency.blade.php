<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - Emergency</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>

    <a href="{{ route('user.index') }}" class="back"> Back to Home</a>

    <h1 align="center">Emergency Procedures</h1>
    <p>Urgent medical services at the highest levels of care</p>

    <section class="section-grid">
        <div class="item">
            <img src="{{asset('images/emergency.png')}}">
            <h3>Emergency Check</h3>
            <p>Medical assessment urgently</p>
        </div>
        <div class="item">
            <img src="{{asset('images/blood-sugar.png')}}">
            <h3>Blood Sugar</h3>
            <p>Measure sugar level immediately</p>
        </div>
        <div class="item">
            <img src="{{asset('images/Blood Pressure.png')}}">
            <h3>Blood Pressure</h3>
            <p>Monitor BP and general condition</p>
        </div>
        <div class="item">
            <img src="{{asset('images/wound.png')}}">
            <h3>Wound Dressing</h3>
            <p>Clean and bandage wounds</p>
        </div>
        <div class="item">
            <img src="{{asset('images/ecg.png')}}">
            <h3>ECG</h3>
            <p>Monitor heart activity using ECG</p>
        </div>
        <div class="item">
            <img src="{{asset('images/temperature.png')}}">
            <h3>Temperature</h3>
            <p>Accurate body temperature</p>
        </div>
        <div class="item">
            <img src="{{asset('images/oxygen.png')}}">
            <h3>Oxygen</h3>
            <p>Monitor oxygen level in blood</p>
        </div>
        <div class="item">
            <img src="{{asset('images/suturing.png')}}">
            <h3>Suturing</h3>
            <p>Stitch or remove stitches</p>
        </div>
    </section>
    <h1 align="center"> show,delete,edit وهنا ممكن يعمل backend حط جدول الاطباء المتاحين يا </h1>
    <footer>&copy; 2026 Hospital Management</footer>

    <script src="{{asset('main.js')}}"></script>
</body>

</html>
