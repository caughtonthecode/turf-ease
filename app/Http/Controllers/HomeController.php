<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\BookingModel;
use App\Models\TurfAdminModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Home Page TurfEase
    public function index()
    {
        $turfs = TurfAdminModel::where('is_booked', false)->get();
        $user = User::all();

        if (Auth::id()) {
            $userType = Auth::user()->usertype;
            $userAll = Auth::user();

            if ($userType == 'user') {
                return view('home.homepage', compact('userAll', 'turfs'));
            } elseif ($userType == 'admin') {
                return redirect('/admin');
            } elseif ($userType == 'tmanager') {
                return redirect('/dashboard');
            } else {
                return redirect()->back();
            }
        }

        return view('home.homepage', compact('turfs'));
    }

    // Turf Category
    public function turfList(Request $request)
    {
        $searchQuery = $request->query('q');
        $sport = $request->query('sport');
        $location = $request->query('location');

        $query = TurfAdminModel::where('is_booked', false);

        if ($searchQuery) {
            $query->where(function ($q) use ($searchQuery) {
                $q->where('turf_name', 'like', "%$searchQuery%")
                    ->orWhere('address', 'like', "%$searchQuery%")
                    ->orWhere('district', 'like', "%$searchQuery%")
                    ->orWhere('division', 'like', "%$searchQuery%");
            });
        }

        if ($location) {
            $query->where(function ($q) use ($location) {
                $q->where('address', 'like', "%$location%")
                    ->orWhere('district', 'like', "%$location%")
                    ->orWhere('division', 'like', "%$location%");
            });
        }

        if ($sport) {
            $query->where('category', $sport);
        }

        $turfs = $query->get();

        if (Auth::id()) {
            $userAll = Auth::user();
            return view('home.turfCategoryView', compact('userAll', 'turfs'));
        }

        return view('home.turfCategoryView', compact('turfs'));
    }

    public function turfViewPage($id)
    {
        $turfs = TurfAdminModel::find($id);
        $turfUserId = $turfs->user_id;
        $turfUser = User::find($turfUserId);

        if ($turfUser && $turfUser->pro_pic) {
            $userProPic = $turfUser->pro_pic;
        } else {
        }

        if (!$turfs) {
            abort(404);
        }

        if (Auth::id()) {
            $userAll = Auth::user();
            $turfUser = User::find($turfUserId);

            // $isBooked = BookingModel::find($turfUser);

            return view('home.turfView', compact('userAll', 'turfs', 'userProPic'));
        }

        return view('home.turfView', compact('turfs', 'userProPic'));
    }

    public function confirmBooking(Request $request, $id)
    {
        $request->validate([
            // 'f_name' => ['required', 'string', 'max:255'],
            // 'shift' => ['required'],
            // 'payment_method' => ['required'],
        ]);

        if ($request->paymentMethod == 'hand-cash') {
            $bookings = new BookingModel;
            $turfs = TurfAdminModel::find($id);
            $turfId = $id;
            $turfName = $turfs->turf_name;
            $turfPrice = $turfs->price;
            $turfShift = $turfs->shift;
            $turfSlot = $turfs->open_time . ' - ' . $turfs->close_time;
            $turfManagerId = $turfs->user_id;

            if (Auth::id()) {
                $users = Auth::user();
                $userAll = $users;
                $userId = $users->id;
            }

            $bookings->user_id = $userId;
            $bookings->user_name = $request->user_name;
            $bookings->turf_id = $turfId;
            $bookings->turf_name = $turfName;
            $bookings->turf_manager_id = $turfManagerId;
            $bookings->phone = $request->phone;
            $bookings->is_booked = true;
            $turfs->is_booked = true;
            $bookings->shift = $turfShift;
            $bookings->booked_slot = $turfSlot;
            $bookings->booking_time = $request->booking_time;
            $bookings->payment_amount = $turfPrice;
            $bookings->payment_status = 'pending';
            $bookings->payment_id = null;

            $bookings->save();
            $turfs->save();

            return view('home.bookingConfirmation', compact('bookings', 'userAll'));
        } else {
            echo 'Payment gatway will intrigate later';
        }
    }

    public function managerRequestView()
    {
        if (Auth::id()) {
            $userAll = Auth::user();
            // $requestStatus = AdminModel::where('user_id', Auth::id())->first();
            $requestStatus = AdminModel::findOrFail(Auth::user()->id);
            // echo 'nai';

            return view('home.managerRequest', compact('userAll', 'requestStatus'));
        }

        return view('home.managerRequest');
    }

    public function managerRequestStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $managerRequest = new AdminModel;

        $managerRequest->user_id = Auth::user()->id;
        $managerRequest->name = $request->name;
        $managerRequest->email = $request->email;
        $managerRequest->phone = $request->phone;
        $managerRequest->user_status = 'pending';

        $managerRequest->save();

        return redirect()->back()->with('message', 'Application Submitted Successfully');
    }

    // Category links

    public function football()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'football')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.football', compact('turfs', 'userAll'));
        }

        return view('home.category.football', compact('turfs'));
    }

    public function cricket()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'cricket')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.cricket', compact('turfs', 'userAll'));
        }

        return view('home.category.cricket', compact('turfs'));
    }

    public function badminton()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'badminton')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.badminton', compact('turfs', 'userAll'));
        }

        return view('home.category.badminton', compact('turfs'));
    }

    public function basketball()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'basketball')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.basketball', compact('turfs', 'userAll'));
        }

        return view('home.category.basketball', compact('turfs'));
    }

    public function paintball()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'paintball')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.paintball', compact('turfs', 'userAll'));
        }

        return view('home.category.paintball', compact('turfs'));
    }

    public function swimming()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'swimming')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.swimming', compact('turfs', 'userAll'));
        }

        return view('home.category.swimming', compact('turfs'));
    }

    public function eSports()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'esports')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.eSports', compact('turfs', 'userAll'));
        }

        return view('home.category.eSports', compact('turfs'));
    }

    public function pool()
    {
        $turfs = TurfAdminModel::where('category', 'LIKE', 'pool')->get();
        if (Auth::id()) {
            $userAll = Auth::user();

            return view('home.category.pool', compact('turfs', 'userAll'));
        }

        return view('home.category.pool', compact('turfs'));
    }
}
