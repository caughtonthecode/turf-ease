<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\BookingModel;
use App\Models\TurfAdminModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin View

    public function adminView()
    {
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();
        $usersAdmin = AdminModel::all();
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('admin.partials.dashboard', compact('turfs', 'bookings', 'user', 'userAll', 'usersAdmin'));
    }

    public function managerRequest(Request $request)
    {

        if ($request->accept) {
            $id = $request->id;
            $user_id = $request->user_id;
            $managerRequest = AdminModel::find($id);
            $user = User::find($user_id);

            $managerRequest->user_status = 'confirmed';
            $user->usertype = 'tmanager';

            $managerRequest->save();
            $user->save();

            return redirect()->back()->with('message', 'Approved Successfully');
        }
        if ($request->reject) {
            $id = $request->id;
            $user_id = $request->user_id;
            $managerRequest = AdminModel::find($id);
            $user = User::find($user_id);

            $managerRequest->user_status = '';

            $managerRequest->save();

            return redirect()->back()->with('message', 'Rejected Successfully');
        }
    }

    public function userView()
    {
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();
        $users = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('admin.partials.users', compact('turfs', 'bookings', 'users', 'userAll'));
    }

    public function earningView()
    {
        $turfs = TurfAdminModel::all();
        $bookings = BookingModel::all();
        $user = User::all();
        if (Auth::id()) {
            $userAll = Auth::user();
        }

        return view('admin.partials.earnings', compact('turfs', 'bookings', 'user', 'userAll'));
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);

        // Delete the user
        $user->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function editUserAdmin(Request $request)
    {
        $users = User::find($request->user_id);

        echo $users->usertype = $request->role;

        $users->save();

        return redirect()->back();
    }

    public function confirmBook($bookingId)
    {
        $booking = BookingModel::findOrFail($bookingId);
        $booking->payment_status = 'confirmed';
        $booking->save();

        return redirect()->back();
    }

    public function rejectBook($bookingId)
    {
        $booking = BookingModel::findOrFail($bookingId);
        $booking->payment_status = 'rejected';
        $booking->save();

        return redirect()->back();
    }
}
