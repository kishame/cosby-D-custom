<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class cuscontroller extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'f-name' => 'required|string|max:255',
            'l-name' => 'required|string|max:255',
            'mail' => 'required|email|unique:user-cred,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'user-password' => 'required|string|min:8',
        ];

        // Custom error messages


        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::table('user-cred')->insert([
            'first_name' => $request->input('f-name'),
            'last_name' => $request->input('l-name'),
            'email' => $request->input('mail'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('user-password')),
            'address' => $request->input('address'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('login')->with('success', 'User Created');
    }
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'mail' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the user from the database
        $user = DB::table('user-cred')
            ->where('email', $request->input('mail'))
            ->first();

        // Check if the user exists and the password is correct
        if ($user && password_verify($request->input('password'), $user->password)) {
            // Store the user's email in the session
            Session::put('email', $user->email);

            // Redirect to the dashboard or any desired route
            return redirect('welcome');
        }

        // Authentication failed, redirect back with error message
        return redirect('login')->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout(Request $request)
    {
        // Clear the user's session data
        Session::forget('email');

        // Redirect to the login page
        return redirect('login');
    }


    public function design(Request $request)
    {
    }


    public function store(Request $request)
    {
        $size = $request->input('size');
        $pocket = $request->input('pocket');
        $fabric = $request->input('fabric');
        $cost = $request->input('cost');

        DB::table('prices')->insert([
            'size' => $size,
            'pocket' => $pocket,
            'fabric' => $fabric,
            'cost' => $cost,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Price data saved successfully');
    }

    public function check(Request $request)
    {
        $rules = [
            'size' => 'required',
            'pocket' => 'required',
            'fabric' => 'required',
            'color' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $size = $request->input('size');
        $pocket = $request->input('pocket');
        $fabric = $request->input('fabric');
        $color = $request->input('color');

        $ccost = DB::table('prices')
            ->select('cost')
            ->where('size', $size)
            ->where('pocket', $pocket)
            ->where('fabric', $fabric)
            ->first();

        if ($ccost == null) {
            return redirect()->back()->with('error', 'error');
        }
        $data = DB::table('user-cred')->where('email', session('email'))->first();

        return view('checkouts')->with(['size' => $size, 'pocket' => $pocket, 'fabric' => $fabric, 'cost' => $ccost, 'color' => $color, 'data' => $data]);
    }

    public function placeOrder(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'size' => 'required',
                'pocket' => 'required',
                'fabric' => 'required',
                'color' => 'required',
                'cost' => 'required',
                'first_name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required',
            ]);

            // Insert the order into the database using the DB facade
            DB::table('checkouts')->insert([
                'size' => $request->input('size'),
                'pocket' => $request->input('pocket'),
                'fabric' => $request->input('fabric'),
                'color' => $request->input('color'),
                'cost' => $request->input('cost'),
                'first_name' => $request->input('first_name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
            ]);

            // Redirect to success view if insertion is successful
            return view('success');
        } catch (Exception $e) {
            // Display error message if an exception occurs
            return view('checkout')->with('error', 'Failed to place order. Please try again later.');
        }
    }
}
