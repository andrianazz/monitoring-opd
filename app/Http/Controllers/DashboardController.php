<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Officer;
use App\Models\Subtask;
use App\Models\Government;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $government = Government::all();
        $officer = User::all();
        $task = Task::all();
        $subtask = Subtask::all();

        $title = 'Dasboard';
        return view('dashboard', compact(['title', 'government', 'officer', 'task', 'subtask']));
    }
}
