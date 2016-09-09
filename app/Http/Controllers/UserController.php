<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Department;

class UserController extends Controller
{
    public function NewUser(Request $Request){
        $user = new User;
        $user->username = $Request->get('username');
        $user->password = bcrypt($Request->get('password'));
        $user->backup_pin = $Request->get('backup_pin');
        $user->name = $Request->get('fullname');
        $user->contact = $Request->get('contact');
        $user->email = $Request->get('email');
        $user->address = $Request->get('address');
        $user->category = $Request->get('category');
        $user->designation = $Request->get('designation');
        $user->teamleader = $Request->get('teamleader');
        $user->last_designation = $Request->get('previous-designation');
        $user->experience = $Request->get('experience');
        $user->qualification = $Request->get('qualification');
        $user->user_profile = $Request->get('profile');
        $result = $user->save();
//        if($result){
//            echo 'asasdfasdfljasdlfkjasdf';
//        }
//        $Request->session()->flash('alert-success', 'User was successfuly added!');
        return redirect()->route('users');
//        return view('manage.users');
    }
    public function view_users(){
        $data = DB::table('users')->get();
        $Roles = DB::table('user_roles')->get();
        $Departments = DB::table('departments')->get();
        $TeamLeaders = DB::table('users')
                ->join('user_roles', 'users.teamleader', '=', 'user_roles.id')
                ->select('users.*', 'user_roles.role', 'user_roles.id')
//                ->where('user_roles.id', '=', 'users.teamleader')
                ->get();
        
//        dd($TeamLeader);
        return view('manage.users', compact('data', 'Roles', 'Departments', 'TeamLeaders'));
    }
    
    public function view_user($uid){
        $data = DB::table('users')->where('id', '=', $uid)->get();
//        dd($data);
        return view('user.profile', compact('data'));
    }
}
