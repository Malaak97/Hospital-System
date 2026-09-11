<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital - Register</title>
  <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body bgcolor="#f0f6ff">

  <div class="login-card">
    <center>
      <img src="{{asset('images/hospital icon.png')}}" width="80" height="80">
    </center>
    <h1>Create New User</h1>

    <form action="{{ route('new_user.post') }}" method="post" id="registerForm" novalidate>
        @csrf
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <fieldset>
        <legend>Personal Data</legend>

        <label for="regUser">Username</label>
        <input type="text" id="regUser" name="name" required minlength="3" maxlength="15">

        <label for="regPhone">Phone</label>
        <input type="text" id="regPhone" name="phone" required minlength="11" maxlength="11">

        <label for="regEmail">Email</label>
        <input type="email" id="regEmail" name="email" required autocomplete="off">

        <label for="regPass">Password</label>
        <input type="password" id="regPass" name="password" required minlength="6" maxlength="20">

        <label for="regConfirm">Confirm Password</label>
        <input type="password" id="regConfirm" name="password_confirmation" required minlength="6" maxlength="20">
      </fieldset>

      <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
  </div>

  <footer>&copy; 2026 Hospital Management</footer>


</body>

</html>
