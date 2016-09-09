<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class UserRoleController extends Controller {

    public static function NewUserRole(Request $UserRole) {
        $Role = new UserRole();
        $Role->role = $UserRole->get('role');
        $Role->department = $UserRole->get('department');
        $Role->company = $UserRole->get('company');
        $Role->description = $UserRole->get('description');
        $Role->status = 0;
        $Role->save();
        return redirect('/manage/roles');
    }

    public static function ViewRole() {
        $Companies = DB::table('companies')->get();
        $Departments = DB::table('departments')->get();
        $UserRoles = DB::table('user_roles')
                ->join('departments', 'user_roles.department', '=', 'departments.id')
                ->join('companies', 'user_roles.company', '=', 'companies.id')
                ->get();
//        dd($UserRoles);
        return view('manage.roles', [
            'Departments' => $Departments,
            'Companies' => $Companies,
            'UserRoles' => $UserRoles,
        ]);
    }

}
