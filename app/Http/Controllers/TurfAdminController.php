<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\TurfAdminModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TurfAdminController extends Controller
{
    public function index()
    {
        $turfs = TurfAdminModel::all();

        return view('turfAdmin.partials.addTurf', compact('turfs'));
    }

    public function dashboardView()
    {
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('turfAdmin.partials.dashboard', compact('turfs', 'userAll', 'bookings'));
    }

    public function myProfile()
    {
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('turfAdmin.partials.profile', compact('user', 'bookings', 'userAll'));
    }

    public function booking()
    {
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
            $penTurfs = BookingModel::where('turf_manager_id', Auth::user()->id)->where('payment_status', 'pending')->get();
            $bookedUser = User::find($penTurfs);
            // $turfs = TurfAdminModel::where('user_id', Auth::user()->id)->get();
        }

        return view('turfAdmin.partials.booking', compact('user', 'penTurfs', 'userAll', 'bookedUser'));
    }

    public function viewTurf()
    {
        if (Auth::id()) {
            $user = User::all();
            $bookings = BookingModel::all();
            $userAll = Auth::user();
            $turfs = TurfAdminModel::where('user_id', Auth::user()->id)->get();

            return view('turfAdmin.partials.myTurf', compact('turfs', 'user', 'bookings', 'userAll'));
        }
    }

    public function myWallet()
    {
        $user = User::all();
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('turfAdmin.partials.wallet', compact('user', 'bookings', 'userAll'));
    }

    public function ok()
    {
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();

        return view('turfAdmin.ok');
    }

    public function addTurf(Request $request)
    {
        $request->validate([
            'turf_name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'division' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'shift' => ['required', 'string', 'max:255'],
            'open_time' => ['required'],
            'close_time' => ['required'],
            'price' => ['required', 'numeric'],
            'f_image' => ['required'],
        ]);

        $user = Auth()->user();
        $user_id = $user->id;
        $user_type = $user->usertype;
        $fImage = $request->file('f_image');
        $imageGallery = $request->file('image_gallery');

        $turfs = new TurfAdminModel;
        $turfs->turf_name = $request->turf_name;
        $turfs->category = $request->category;
        $turfs->description = $request->description;
        $turfs->division = $request->division;
        $turfs->district = $request->district;
        $turfs->address = $request->address;
        $turfs->shift = $request->shift;
        $turfs->open_time = $request->open_time;
        $turfs->close_time = $request->close_time;
        $turfs->price = $request->price;
        $turfs->facilities = json_encode($request->facilities);
        $turfs->user_id = $user_id;
        $turfs->user_type = $user_type;

        if ($fImage) {
            $imageName = time().'.'.$fImage->getClientOriginalExtension();
            $request->f_image->move('turfAdmin/images', $imageName);
            $turfs->f_image = $imageName;
        }

        if ($imageGallery) {
            $imageGalleryName = time().'.'.$imageGallery->getClientOriginalExtension();
            $request->image_gallery->move('images', $imageGalleryName);
            $turfs->image_gallery = $imageGalleryName;
        }

        $turfs->save();

        return response()->json(['message' => 'New turf added successfully!']);
    }

    public function deleteTurf($id)
    {
        $turf = TurfAdminModel::findOrFail($id);

        // Delete the user
        $turf->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function updateTurf(Request $request, $id)
    {
        $request->validate([
            'turf_name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'shift' => ['required', 'string', 'max:255'],
            'open_time' => ['required'],
            'close_time' => ['required'],
            'price' => ['required', 'numeric'],
            'f_image' => ['required'],
        ]);

        $fImage = $request->file('f_image');
        $imageGallery = $request->file('image_gallery');

        $turfs = TurfAdminModel::find($id);
        $turfs->turf_name = $request->turf_name;
        $turfs->category = $request->category;
        $turfs->description = $request->description;
        $turfs->address = $request->address;
        $turfs->shift = $request->shift;
        $turfs->open_time = $request->open_time;
        $turfs->close_time = $request->close_time;
        $turfs->price = $request->price;

        if ($fImage) {
            $imageName = time().'.'.$fImage->getClientOriginalExtension();
            $request->f_image->move('turfAdmin/images', $imageName);
            $turfs->f_image = $imageName;
        }

        if ($imageGallery) {
            $imageGalleryName = time().'.'.$imageGallery->getClientOriginalExtension();
            $request->image_gallery->move('images', $imageGalleryName);
            $turfs->image_gallery = $imageGalleryName;
        }

        $turfs->save();

        return redirect()->back()->with('message', 'Turf Updated Successfully!');
    }
}
