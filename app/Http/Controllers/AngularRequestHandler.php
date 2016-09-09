<?php

namespace App\Http\Controllers;
//-----Getting User Modal
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AngularRequestHandler extends Controller
{
    public function ViewTeam(){
        $data = DB::table('users')->get();
        return view('Modal.objects.ViewAllTeam', compact('data'));
    }
}
