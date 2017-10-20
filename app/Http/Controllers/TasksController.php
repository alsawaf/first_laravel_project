<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{

    public function index(){

        $Tasks = DB::table('tasks')->get();  ## this gets all record from tasks table

        return view('tasks' , compact('Tasks'));

    }


    public function single_task(){

        $Tasks = DB::table('tasks')->get();  ## this gets all record from tasks table

        return view('tasks' , compact('Tasks'));


    }
}
