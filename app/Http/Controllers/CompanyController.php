<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Request;

class CompanyController extends Controller
{
    public static function NewCompany(Request $CompanyData){
//        dd($CompanyData);
        $Company = new Company();
        $Company->company = $CompanyData->get('company');
        $Company->email = $CompanyData->get('email');
        $Company->phone = $CompanyData->get('phone');
        $Company->status = $CompanyData->get('status');
        $Company->description = $CompanyData->get('description');
        $Company->address_line_1 = $CompanyData->get('address-line-1');
        $Company->address_line_2 = $CompanyData->get('address-line-2');
        $Company->city = $CompanyData->get('city');
        $Company->state = $CompanyData->get('state');
        $Company->zip_code = $CompanyData->get('pin');
        $Company->country = $CompanyData->get('country');
        $Company->save();
        return redirect()->route('SU-Company');
    }
    
    public static function ViewAll(){
        $Company = DB::table('companies')->get();
        return view('SuperUser.manage.company', compact('Company'));
    }
}
