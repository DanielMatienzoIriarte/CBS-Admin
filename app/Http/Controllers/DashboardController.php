<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::check()) {
            $userType = Auth()->user();

            dd($userType);
            switch($userType) {
                case 'admin':
                    dd('28');
                    return view('dashboard.index');
            }
        } else {

            dd('13');
            return view('dashboard.index');
        }

    }
}
