<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;

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

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();

    return view('tasks', ['tasks' => $tasks]);
});

Route::post('/task', function (Request $request) {
    $data = $request->validate([
        'name' => 'required'
    ]);

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

Route::delete('/task/{task:id}', function (Task $task) {
    $task->delete();
    return redirect('/');
});

