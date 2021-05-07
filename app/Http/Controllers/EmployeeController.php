<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class EmployeeController extends Controller
{
    //
    public function dashboard()
    {
        echo "this is dashboard";
    }
    public function createEmployee(Request $request)
    {
        $companie = Companie::where('company_code', $request->input('company_code'))->get();
        return $companie;
    }
}
