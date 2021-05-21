<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use DateTime;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function index()
    {
        return view('attendenceDetails');
    }

    public function getTodayAttendenceDetails()
    {
        $allEmployee = Employee::all();
        return $allEmployee;
    }

    public function attendenceTaker()
    {
        $dt = new DateTime();
        $date = $dt->format('Y-m-d');

        $begin = new DateTime("2021-05-15");
        $end   = new DateTime("2021-05-22");

        $dateTime = array();
        $count = 0;
        for ($i = $begin; $i <= $end; $i->modify('+1 day')) {
            $value = $i->format("Y-m-d");
            $dateTime[$count] = $value;
            $count++;
        }
        // print_r($dateTime);
        return view('attendenceTaker')->with('dateTimes', $dateTime);
    }
}
