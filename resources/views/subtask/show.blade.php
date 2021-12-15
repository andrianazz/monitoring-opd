@php
function rupiah($angka)
{

$hasil_rupiah = "Rp " . number_format($angka,0, ',',);
return $hasil_rupiah;
}
@endphp
@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3> <a href="/task/{{$task->government_id}}/show"><i class="fa fa-arrow-left"></i></a> Penyusunan Dokumen Perencanaan Perangkat Daerah</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Penyusunan Dokumen Perencanaan Perangkat Daerah <small>Dinas Pendidikan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">Kegiatan yang dilakukan dalam Pemerintah Daerah Provinsi Riau</p>
                    <div class="row" style="margin-bottom: 20px;">
                        <form action="/subtask/insert" method="post">
                            @csrf
                            <div class="col-md-6">
                                <label for="fullname">Nama Belanja * :</label>
                                <input type="text" id="fullname" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-2">
                                <label for="fullname">Pagu * :</label>
                                <input type="text" id="dengan-rupiah" class="form-control" name="pagu" required>
                            </div>
                            <div class="col-md-2">
                                <label for="fullname">Tanggal * :</label>

                                <input type="date" max="{{ date('Y-m-d') }}" id="fullname" class="form-control" name="date" required>
                            </div>
                            <input type="hidden" name="task_id" value="{{ $task->id }}">
                            <div class="col-md-2 text-right" style="margin-top: 23px;">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Belanja</button>
                            </div>
                        </form>
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered mb-5" width="100%">
                        <thead>
                            <tr>
                                <th width="20">No.</th>
                                <th width="1500">Sub Kegiatan</th>
                                <th width="250">Tanggal</th>
                                <th width="100">Pagu</th>
                                <th></th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $x=1;
                            @endphp
                            @foreach ($subtask as $sub)
                            <tr>
                                <td>{{ $x++ }}</td>
                                <td> <a href="/subtask/{{$sub->id}}/upload"> <i class="fa fa-file-image-o" style="color: blue;"> </i> {{ $sub->name }}</a></td>
                                <td>{{ strftime('%d-%B-%Y', strtotime($sub->date)) }}</td>
                                <td class="text-right">{{ rupiah($sub->pagu) }}</td>
                                <td class="text-center"><a href="/subtask/{{$sub->id}}/edit/{{$sub->task_id}}" class="btn btn-info"> <i class="fa fa-edit"></i> Edit</a></td>
                                <form action="/subtask/{{$sub->id}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="task_id" value="{{$sub->task_id}}">
                                    <!-- <td class="text-center"><button type="submit" class="btn btn-danger"> <i class="fa fa-remove"></i> Hapus</button></td> -->
                                    <td class="text-center"><button type="button" data-id="{{$sub->id}}" data-id2="{{ $sub->task_id }}" data-name="{{$sub->name}}" class="btn btn-danger swalDeleteSubTask"> <i class="fa fa-remove"></i> Hapus</button></td>
                                </form>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection