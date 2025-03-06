<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::check()) {
            $loggedUser = Auth()->user(); 

            switch($loggedUser->getRoleNames()[0]) {
                case 'admin':
                    return view('dashboard');
                default:
                    return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

    }
}
