<?php

namespace App\Http\Controllers;

use App\Models\TurfAdminModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $turfs = TurfAdminModel::all();
        $user = User::all();

        if (Auth::id()) {
            $userType = Auth::user()->usertype;
            $userAll = Auth::user();

            if ($userType == 'user') {
                return view('home.homepage', compact('userAll'));
            } elseif ($userType == 'admin') {
                return view('admin.dashboard', compact('userAll'));
            } elseif ($userType == 'tmanager') {
                return redirect('/dashboard');
            } else {
                return redirect()->back();
            }
        }

        return view('home.homepage', compact('turfs'));
    }
}
