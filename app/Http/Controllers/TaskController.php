<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function getTasks(){
        $emps = Task::all();
        return view("hello", compact("emps"));
    }
}
