<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function dashboard()
    {
        return view('layouts.master');
    }
    public function createEmployee(Request $request)
    {
        $companie = Companie::where('company_code', $request->input('company_code'))->first();

        $emp = new Employee;
        $emp->name = $request->input('name');
        $emp->email = $request->input('email');
        $password_match = strcmp($request->input('password'),$request->input('confirm_password'));
        if($password_match == 0){
            $emp->password = $request->input('password'); 
        }
        $emp->company_code = $request->input('company_code');
        $emp->company_id = $companie->id;
        
        $emp->save();

        return "employee save successfully";
    }
}
