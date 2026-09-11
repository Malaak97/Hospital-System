<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital - Operations</title>
  <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>

  <a href="{{ route('user.index') }}" class="back"> Back to Home</a>

  <h1 align="center">Operations Department</h1>
  <p>All surgical operations available at the hospital</p>

  <section class="section-grid">
    <div class="item">
      <img src="{{asset('images/surgery.png')}}">
      <h3>General Surgery</h3>
      <p>General and specialized surgeries</p>
    </div>
    <div class="item">
      <img src="{{asset('images/gynecology.png')}}">
      <h3>Gynecology</h3>
      <p>Women's and delivery surgeries</p>
    </div>
    <div class="item">
      <img src="{{asset('images/orthopedics.png')}}">
      <h3>Orthopedics</h3>
      <p>Bones, joints and sports injuries</p>
    </div>
    <div class="item">
      <img src="{{asset('images/liver.png')}}">
      <h3>Internal Surgery</h3>
      <p>Digestive, liver and pancreas</p>
    </div>
    <div class="item">
      <img src="{{asset('images/neurology.png')}}">
      <h3>Neurosurgery</h3>
      <p>Brain, nerves and spine</p>
    </div>
    <div class="item">
      <img src="{{asset('images/ophthalmology.png')}}">
      <h3>Eye Surgery</h3>
      <p>Vision correction surgeries</p>
    </div>
    <div class="item">
      <img src="{{asset('images/dentistry.png')}}">
      <h3>Dental Surgery</h3>
      <p>Mouth, teeth and implants</p>
    </div>
    <div class="item">
      <img src="{{asset('images/ent.png')}}">
      <h3>ENT Surgery</h3>
      <p>Ear, nose, throat surgeries</p>
    </div>
  </section>
  <h1 align="center"> show وهنا ممكن يعمل backend حط جدول الاطباء المتاحين يا </h1>
  <footer>&copy; 2026 Hospital Management</footer>
  <script src="{{asset('main.js')}}"></script>
</body>

</html>
