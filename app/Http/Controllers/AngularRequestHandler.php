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
        $data = DB::table('users')->where('type', '!=', 'unapproved')->get();
        $http = 'ViewAllTeam';
        return view('objectStorage.objectHandler', compact('data', 'http'));
    }
    public function ViewSuperUser(){
        $SU = DB::table('users')->select('id', 'name', 'email', 'type', 'dp')->where('type', '=', 'SuperUser')->get();
        $http = 'ViewSuperUser';
        return view('objectStorage.objectHandler', compact('SU', 'http'));
    }
}
