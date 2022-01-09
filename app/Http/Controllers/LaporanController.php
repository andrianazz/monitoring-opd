<?php

namespace App\Http\Controllers;


use Dompdf\Dompdf;
use App\Models\Task;
use App\Models\Photo;
use App\Models\Subtask;
use App\Models\Government;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    //
    public function laporanOPD($id, $month)
    {
        $bulan = $month;
        $government = Government::find($id);
        $task = Task::whereMonth('created_at', '=', $bulan)->where('government_id', '=', $id)->get();
        $user = User::find(1);
        $title = 'Laporan';


        foreach ($task as $t) {
            $task_id[] = $t->id;
        }
        foreach ($task_id as $t) {

            $subtask[] = Subtask::where('task_id', '=', $t)->get()->toArray();
        }


        $print =  view('laporan.laporanOPD2', compact(['government', 'task', 'subtask', 'title', 'bulan', 'user']));
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
        $title = 'Laporan';


        foreach ($task as $t) {
            $task_id[] = $t->id;
        }
        foreach ($task_id as $t) {

            $subtask[] = Subtask::where('task_id', '=', $t)->get()->toArray();
        }


        $print =  view('laporan.laporanOPDpdf', compact(['government', 'task', 'subtask', 'title']));

        // $pdf = PDF::loadView('laporan.laporanOPDpdf', compact(['government', 'task', 'subtask', 'title']));
        // return $pdf->stream();

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
        $title = 'Laporan';
        $subtask = Subtask::find($id);
        $data = Photo::where('subtask_id', '=', $subtask->id)->get();

        return view('laporan.laporanDokumentasi', compact(['data', 'subtask', 'title']));
    }
}
