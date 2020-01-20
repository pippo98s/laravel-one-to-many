<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function getEmployees(){
        $emps = Employee::all();
        return view("welcome", compact("emps"));
    }
}
