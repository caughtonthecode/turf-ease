<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view("user.userLogin");
    }

    public function register(Request $request)
    {
        return view("user.userRegistration");
    }

    /**
     * Display the user's profile.
     */
    public function index()
    {
        $user = User::all();
        if(Auth::id())
        {
            $userAll = Auth::user();
        }
        return view('user.partials.personalInfo', compact('userAll'));
    }

    // // Persoanl Information
    // public function personalInfo()
    // {
    //     $user = User::all();
    //     if(Auth::id())
    //     {
    //         $userAll = Auth::user();
    //     }
    //     return view('user.partials.personalInfo', compact('userAll'));
    // }

    // Booking History
    public function bookingHistory()
    {
        $user = User::all();
        if(Auth::id())
        {
            $userAll = Auth::user();
        }
        return view('user.partials.bookingHistory', compact('userAll'));
    }

    // Tournament
    public function tournament()
    {
        $user = User::all();
        if(Auth::id())
        {
            $userAll = Auth::user();
        }
        return view('user.partials.tournament', compact('userAll'));
    }

    public function profileUpdateView()
    {
        $user = User::all();
        if(Auth::id())
        {
            $userAll = Auth::user();
        }
        return view('user.partials.update', compact('userAll'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'f_name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'numeric']
        ]);

        $user = User::findOrFail(auth()->id());

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->hasFile('pro_pic')) {
            $proPic = $request->pro_pic;
            $imageName = time().'.'.$proPic->getClientOriginalExtension();
            $proPic->move('img', $imageName);
            $user->pro_pic = $imageName;
        }

        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Successfully');

    }
}
