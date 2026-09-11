<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Validation;

use App\Models\Patient;

class PatientController extends Controller
{
    public function create()
    {
        return view('user.new_user');
    }
    public function store(RegistRequest $request)
    {
      Patient::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
      ]);

        return redirect()->route('user.index')->with('success', 'Patient created successfully.');
    }
}
