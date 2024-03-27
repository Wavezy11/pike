<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;

class Logins extends Controller
{
    public function show() {
        return view("Login");
    }
}

class Logging extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'FName' => 'required',
            'LName' => 'required',
            'DOB' => 'required',
            'Gender' => 'required',
            'PCode' => 'required',
            'Email' => 'required',
            'TNumber' => 'required',
            'Pword' => 'required',
            'MailList' => 'required',
            'TOS' => 'required',
        ]);

        // Create a new instance of your model with the validated data
        $newRecord = Login::create($validatedData);

        return response()->json(['message' => 'Record created successfully', 'data' => $newRecord]);
    }
}
