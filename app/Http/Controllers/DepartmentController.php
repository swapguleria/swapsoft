<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Requests;

class DepartmentController extends Controller {

    public static function NewDepartment(Request $DepartmentData) {
//        dd($DepartmentData->get('department'));
        $Department = new Department();
        $Department->department = $DepartmentData->get('department');
        $Department->manager = $DepartmentData->get('manager');
        $Department->email = $DepartmentData->get('email');
        $Department->mobile = $DepartmentData->get('mobile');
        $Department->company = $DepartmentData->get('company');
        $Department->description = $DepartmentData->get('description');
        $Department->state = 0;
        $Department->save();
        return redirect('/manage/department');
    }

    public static function ViewDepartments() {
        $Companies = DB::table('companies')->get();
        $Users = DB::table('users')->select('id', 'name', 'email')->get();
        $Departments = DB::table('departments')
                ->join('companies', 'departments.company', '=', 'companies.id')
                ->join('users', 'departments.manager', '=', 'users.id')
                ->select('departments.*', 'users.name', 'companies.company')
                ->get();
//        dd($Departments);
        return view('manage.department', [
            'Departments' => $Departments,
            'Companies' => $Companies,
            'Users' => $Users,
        ]);
    }
    public static function ViewDepartment($did){
        $data = DB::table('departments')->where('id', '=', $did)->get();
        return view('manage.__viewDepartment', compact('data'));
    }

}
