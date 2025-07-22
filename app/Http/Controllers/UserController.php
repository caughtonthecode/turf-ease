<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.userLogin');
    }

    public function register(Request $request)
    {
        return view('user.userRegistration');
    }

    /**
     * Display the user's profile.
     */
    public function index()
    {
        $user = User::all();
        if (Auth::id()) {
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
        if (Auth::id()) {
            $userAll = Auth::user();
            $user_id = $userAll->id;
            $bookings = BookingModel::all();
        }

        return view('user.partials.bookingHistory', compact('userAll', 'bookings'));
    }

    // Tournament
    public function tournament()
    {
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('user.partials.tournament', compact('userAll'));
    }

    public function profileUpdateView()
    {
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('user.partials.update', compact('userAll'));
    }

    // Turf Manager Profile
    public function editProfileView()
    {
        $user = User::all();

        return view('turfAdmin.partials.editProfile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'f_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'numeric'],
            'social_link' => ['url'],
        ]);

        $user = User::findOrFail(auth()->id());

        $user->f_name = $request->f_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->bio = $request->bio;
        $user->social_links = $request->input('social_links');

        if ($request->hasFile('pro_pic')) {
            $proPic = $request->pro_pic;
            $imageName = time() . '.' . $proPic->getClientOriginalExtension();
            $proPic->move('img', $imageName);
            $user->pro_pic = $imageName;
        }

        $user->save();

        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
}
