<?php

namespace App\Http\Controllers;

use App\Models\Government;
use App\Models\Subtask;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        if (auth()->user()->id > 1) {
            # code..
            return redirect('/task/' . auth()->user()->government_id . '/show');
        }
        $government = Government::all()->skip(1);
        $task = Task::all();

        $title = 'Seluruh OPD';
        return view('task.index', compact(['title', 'government', 'task']));
    }

    public function show($id)
    {
        $government = Government::find($id);
        $task = Task::where('government_id', '=', $id)->get();


        $title = 'Seluruh OPD';
        return view('task.show', compact(['title', 'government', 'task']));
    }

    public function insert(Request $request)
    {

        Task::create($request->all());
        return redirect('task/' . $request->government_id . '/show');
    }

    public function destroy(Request $request, $id)
    {

        $data = Task::find($id);
        $data->delete();

        return redirect('task/' . $request->government_id . '/show');
    }

    public function edit($id, $governm)
    {
        $data = Task::find($id);
        $opd = $governm;

        $title = 'Edit Kegiatan';
        return view('task.edit', compact(['title', 'data', 'opd']));
    }

    public function update(Request $request, $id)
    {
        $data = Task::find($id);
        $data->update($request->all());

        return redirect('task/' . $request->government_id . '/show');
    }
}
