<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/page2',function (){
//
//    $name = 'Omar';
//
//
//    return view ('Page2',[
//
//        'name' => $name
//
//    ]);
//});


Route::get('/tasks' ,'TasksController@index');

        #the following 2 lines should be moved to the controller
       # $Tasks = DB::table('tasks')->get();  ## this gets all record from tasks table
        #return view('tasks' , compact('Tasks'));




Route::get('/tasks/{task}','TasksController@single_task');
#these lines should be moved to the controller
//   $Task = DB::table('tasks')->find($id); #this line get the record with the id ,
//    #that was passed to the function as a parameter which was passed from the url {task}
//
//    return view('single_task',compact('Task'));

