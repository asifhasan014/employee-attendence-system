<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function dashboard(){
        echo "this is dashboard";
    }
    public function createEmployee(Request $request){
        return "this is create employee controller";
    }
    
}
