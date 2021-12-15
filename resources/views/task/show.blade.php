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
            <h3> <a href="/task"><i class="fa fa-arrow-left"></i></a> {{ $government->name }}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> {{ $government->name }}<small>OPD</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">Kegiatan yang dilakukan dalam Pemerintah Daerah Provinsi Riau</p>
                    <div class="row" style="margin-bottom: 20px;">
                        <form action="/task/insert" method="post">
                            @csrf
                            <div class="col-md-10">
                                <label for="fullname">Nama Kegiatan * :</label>
                                <input type="text" id="fullname" class="form-control" name="name" required="">
                            </div>
                            <input type="hidden" name="government_id" value="{{$government->id}}">
                            <input type="hidden" name="bulan" value="{{$bulan}}">
                            <div class="col-md-2 text-right" style="margin-top: 23px;">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Kegiatan</button>
                            </div>
                        </form>
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered mb-5" width="100%">
                        <thead>
                            <tr>
                                <th width="20">No.</th>
                                <th width="1500">Kegiatan</th>
                                <th width="100">Total</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $x=1;
                            @endphp
                            @foreach ($task as $row)
                            <tr>
                                <td>{{ $x++ }}</td>
                                <td> <a href="/task/{{ $row->id }}/subtask"> <i class="fa fa-plus-circle" style="color: green;"></i> {{ $row->name }}</a> </td>
                                <td class="text-right">{{ rupiah($row->total) }}</td>
                                <td class="text-center"><a href="/task/{{$row->id}}/edit/{{$row->government_id}}" class="btn btn-info"> <i class="fa fa-edit"></i> Edit</a></td>
                                <form action="/task/{{$row->id}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="government_id" value="{{$row->government_id}}">
                                    <!-- <td class="text-center"><button type="submit" class="btn btn-danger"> <i class="fa fa-remove"></i> Hapus</button></td> -->
                                    <td class="text-center"><button type="button" class="btn btn-danger swalDeleteTask" data-id="{{$row->id}}" data-id2="{{$row->government_id}}" data-name="{{$row->name}}"> <i class="fa fa-remove"></i> Hapus</button></td>
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