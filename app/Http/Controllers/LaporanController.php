<?php

namespace App\Http\Controllers;


use Dompdf\Dompdf;
use App\Models\Task;
use App\Models\Photo;
use App\Models\Subtask;
use App\Models\Government;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //
    public function laporanOPD($id)
    {
        $government = Government::find($id);
        $task = Task::where('government_id', '=', $id)->get();
        $title = 'Laporan OPD';


        foreach ($task as $t) {
            $task_id[] = $t->id;
        }
        foreach ($task_id as $t) {

            $subtask[] = Subtask::where('task_id', '=', $t)->get()->toArray();
        }


        $print =  view('laporan.laporanOPD2', compact(['government', 'task', 'subtask', 'title']));
        return $print;

        $dompdf = new Dompdf();
        $dompdf->loadHtml($print);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream('Laporan - ' . $government->name . ".pdf");
    }

    public function laporanOPDpdf($id)
    {
        $government = Government::find($id);
        $task = Task::where('government_id', '=', $id)->get();
        $title = 'Laporan OPD';


        foreach ($task as $t) {
            $task_id[] = $t->id;
        }
        foreach ($task_id as $t) {

            $subtask[] = Subtask::where('task_id', '=', $t)->get()->toArray();
        }


        $print =  view('laporan.laporanOPDpdf', compact(['government', 'task', 'subtask', 'title']));

        $dompdf = new Dompdf();
        $dompdf->loadHtml($print);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream('Laporan - ' . $government->name . ".pdf");
    }

    public function laporanDokumentasi($id)
    {
        $title = 'Laporan Dokumentasi';
        $subtask = Subtask::find($id);
        $data = Photo::where('subtask_id', '=', $subtask->id)->get();

        return view('laporan.laporanDokumentasi', compact(['data', 'subtask', 'title']));
    }
}
