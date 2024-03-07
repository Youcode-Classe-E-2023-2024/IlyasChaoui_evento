<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('authentication.authentication', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $test = $request->validate([
            'name' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'city_id' => 'required|exists:cities,id',
            'phoneNumber' => 'required',
            'role' => 'required|in:user,organiser',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $picturePath = null;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = 'assets/images/profileImages';
            $file->move(public_path($destinationPath), $filename);
            $picturePath = $destinationPath . '/' . $filename;
        }

        $user = User::create([
            'name' => $request->name,
            'picture' => $picturePath, // Use directly, it's already null if not set
            'phoneNumber' => $request->phoneNumber,
            'city_id' => $request->city_id,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Optionally, redirect with a success message or to a specific route.
        return redirect(RouteServiceProvider::LOGIN)->with('success', 'User created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'The provided email does not exist in our records.',
            ])->onlyInput('email');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'The provided password is incorrect.',
            ])->withInput(['email' => $request->email]);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with('success', 'You have been successfully logged out!');
    }
}
