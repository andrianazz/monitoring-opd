<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Photo;
use App\Models\Subtask;
use Illuminate\Http\Request;

class SubtaskController extends Controller
{
    //
    public function show($id)
    {
        $task = Task::find($id);
        $subtask = Subtask::where('task_id', '=', $id)->get();

        $title = 'Sub Kegiatan';
        return view('subtask.show', compact(['title', 'subtask', 'task']));
    }

    public function insert(Request $request)
    {

        Subtask::create([
            'name' => $request->name,
            'pagu' => str_replace('.', '', $request->pagu),
            'date' => $request->date,
            'task_id' => $request->task_id,
        ]);

        $task = Task::find($request->task_id);
        $task->update([
            'total' => $task->total + str_replace('.', '', $request->pagu)
        ]);

        return redirect('task/' . $request->task_id . '/subtask');
    }

    public function edit($id, $task)
    {
        $data = Subtask::find($id);
        $task = $task;

        $title = 'Edit Belanja';
        return view('subtask.edit', compact(['title', 'data', 'task']));
    }

    public function update(Request $request, $id)
    {
        $data = Subtask::find($id);
        $task = Task::find($data->task_id);

        $task->update([
            'total' => $task->total - $data->pagu
        ]);
        $task->update([
            'total' => $task->total + str_replace('.', '', $request->pagu)
        ]);

        $data->update([
            'name' => $request->name,
            'pagu' => str_replace('.', '', $request->pagu),
            'date' => $request->date,
            'task_id' => $request->task_id
        ]);
        return redirect('task/' . $request->task_id . '/subtask');
    }


    public function destroy(Request $request, $id)
    {

        $data = Subtask::find($id);
        $photo = Photo::where("subtask_id", "=", $data->id);

        $task = Task::find($data->task_id);
        $task->update([
            'total' => $task->total - $data->pagu
        ]);

        $photo->delete();
        $data->delete();

        return redirect('task/' . $request->task_id . '/subtask');
    }
}
