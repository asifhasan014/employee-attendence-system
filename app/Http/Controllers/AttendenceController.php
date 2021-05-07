<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function attendenceDetails(){
        return view('attendenceDetails');
    }

    public function attendenceTaker(){
        return view('attendenceTaker');
    }
}
