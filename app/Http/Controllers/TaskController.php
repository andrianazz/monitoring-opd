<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Government;
use Illuminate\Http\Request;


class TaskController extends Controller
{

    public function index($month, Request $request)
    {
        $bulan = $month;

        if ($request->month) {
            $bulan = $request->month;
        }

        if (auth()->user()->id > 1) {
            # code..
            return redirect('/task/' . auth()->user()->government_id . '/show/' . date('m'));
        }
        $government = Government::all()->skip(1);
        // $task = Task::all();
        $task = Task::whereMonth('created_at', '=', $bulan)->get();


        $title = 'Seluruh OPD';
        return view('task.index', compact(['title', 'government', 'task', 'bulan']));
    }

    public function show($id, $month)
    {
        $bulan = $month;
        $government = Government::find($id);

        // $task = Task::where('government_id', '=', $id)->get();
        $task = Task::whereMonth('created_at', '=', $bulan)->where('government_id', '=', $id)->get();


        $title = 'Seluruh OPD';
        return view('task.show', compact(['title', 'government', 'task', 'bulan']));
    }

    public function insert(Request $request)
    {

        Task::create($request->all());
        return redirect('task/' . $request->government_id . '/show/' . $request->bulan);
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

        return redirect('task/' . $request->government_id . '/show/' . date('m'));
    }
}
