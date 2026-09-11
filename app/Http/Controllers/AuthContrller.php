<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use App\Models\Patient;

class AuthContrller extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }
    public function login(Login $request)
    {
        $patient = \App\Models\Patient::where('email', $request->email)->first();

        if ($patient && Hash::check($request->password, $patient->password)) {
             session(['patient_id' => $patient->id]);
            return redirect()->route('user.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
