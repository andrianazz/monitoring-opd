<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Subtask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class PhotoController extends Controller
{
    //
    public function index($id)
    {
        $photos = Photo::where('subtask_id', '=', $id)->get();
        $subtask_id = $id;

        $title = 'Upload';
        return view('photo.index', compact(['title', 'photos', 'subtask_id']));
    }

    public function insert(Request $request, $id)
    {
        $data = new Photo();
        $subtask = Subtask::find($id);

        if ($request->hasFile('name')) {
            $nameImage = $request->file('name')->move('laporan/' . $subtask->task->government->name . '/' . $subtask->task->name . '/' . $subtask->name . "/", $request->file('name')->getClientOriginalName());

            $data->name = $request->file('name')->getClientOriginalName();
            $data->subtask_id = $id;
            $data->save();
        }

        return redirect('/subtask/' . $id . '/upload');
    }

    public function delete($id)
    {
        $data = Photo::find($id);


        $image_path = "laporan/" . $data->subtask->task->government->name . "/" . $data->subtask->task->name . "/" . $data->subtask->name . "/" . $data->name;

        if (FacadesFile::exists($image_path)) {
            FacadesFile::delete($image_path);
        }
        $data->delete();
        return
            redirect('/subtask/' . $data->subtask_id . '/upload');
    }
}
