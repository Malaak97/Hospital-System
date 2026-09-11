<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - Login</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body bgcolor="#f0f6ff">
    <div class="login-card">
        <center>
            <h1>AlHayat Hospital</h1>
            <img src="{{asset('images/hospital icon.png')}}" width="80" height="80">
        </center>
        <h1>Login</h1>

        <form action="{{ route('login') }}" method="post" id="loginForm" >
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
                <legend>Account Info</legend>

                <label for="regEmail">Email</label>
                <input type="email" id="regEmail" name="email" required >

                <label for="pass">Password</label>
                <input type="password" id="pass" name="password" required minlength="6" maxlength="20">
            </fieldset>

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="{{ route('new_user.create') }}">Create New User</a></p>
    </div>

    <footer>&copy; 2026 Hospital Management</footer>


</body>

</html>
