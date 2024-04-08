<?php

namespace App\Http\Controllers;

use App\Models\TurfAdminModel;
use Illuminate\Http\Request;

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

        return view('turfAdmin.partials.dashboard', compact('turfs'));
    }

    public function myProfile()
    {
        return view('turfAdmin.partials.profile');
    }

    public function booking()
    {
        return view('turfAdmin.partials.booking');
    }

    public function viewTurf()
    {
        return view('turfAdmin.partials.myTurf');
    }

    public function myWallet()
    {
        return view('turfAdmin.partials.wallet');
    }

    public function ok()
    {
        return view('turfAdmin.ok');
    }

    public function addTurf(Request $request)
    {
        $request->validate([
            'turf_name' => ['required', 'string', 'max:255'],
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

        $fImage = $request->f_image;
        $imageGallery = $request->image_gallery;

        $turfs = new TurfAdminModel;

        $turfs->turf_name = $request->turf_name;
        $turfs->description = $request->description;
        $turfs->division = $request->division;
        $turfs->district = $request->district;
        $turfs->address = $request->address;
        $turfs->shift = $request->shift;
        $turfs->open_time = $request->open_time;
        $turfs->close_time = $request->close_time;
        $turfs->price = $request->price;
        $turfs->user_id = $user_id;
        $turfs->user_type = $user_type;

        if ($fImage) {
            $imageName = time().'.'.$fImage->getClientOriginalExtension();
            $request->f_image->move('turfAdmin/images', $imageName);
            $turfs->f_image = $imageName;
        }

        if ($imageGallery) {
            $imageGallery = time().'.'.$imageGallery->getClientOriginalExtension();
            $request->image_gallery->move('images', $imageGallery);
            $turfs->image_gallery = $imageGallery;
        }

        $turfs->save();

        return redirect()->back()->with('message', 'New turf added successfully!');
    }
}
