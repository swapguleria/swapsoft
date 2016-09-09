<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class DashboardController extends Controller {

    public function Dashboard() {
        return view('user.dashboard');
    }

}
