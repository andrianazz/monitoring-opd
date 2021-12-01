<?php

namespace App\Http\Controllers;

use App\Models\Government;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    //
    public function index()
    {
        $title = 'OPD';
        $data = Government::all();
        return view('government.index', compact(['title', 'data']));
    }

    public function add()
    {
        $title = 'Tambah OPD';
        return view('government.add', compact(['title']));
    }

    public function insert(Request $request)
    {
        Government::create($request->all());
        return redirect()->route('government');
    }

    public function edit($id)
    {
        $data = Government::find($id);
        $title = 'Edit OPD';
        return view('government.edit', compact(['title', 'data']));
    }

    public function update(Request $request, $id)
    {
        $data = Government::find($id);
        $data->update($request->all());

        return redirect()->route('government');
    }

    public function destroy($id)
    {
        $data = Government::find($id);
        $data->delete();

        return redirect()->route('government');
    }
}
