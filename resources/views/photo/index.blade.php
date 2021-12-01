@extends('layout.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Upload Dokumentasi</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Dokumentasi Gambar <small> Upload Gambar </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row" style="margin-bottom: 20px;">
                            <form action="/add-photo/{{ $subtask_id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <input type="file" name="name" class="btn btn-primary">
                                </div>
                                <div class="col-md-3 text-left">
                                    <button type="submit" class="btn btn-success">Kirim Foto</button>
                                </div>
                            </form>
                        </div>

                        <div class="row">
                            @foreach ($photos as $photo)
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{ asset('laporan/'.$photo->subtask->task->government->name.'/'.$photo->subtask->task->name.'/'.$photo->subtask->name.'/'.$photo->name) }}" alt="image">
                                    </div>
                                    <div class="caption text-center">
                                        <form action="/delete-photo/{{ $photo->id }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="subtask_id" value="{{ $subtask_id }}">
                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-remove"></i> Delete</button>
                                            <!-- <button type="button" class="btn btn-danger swalDeletePhoto" data-id="{{ $photo->id }}" data-in="{{ $subtask_id }}"> <i class="fa fa-remove"></i> Delete</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Download <small> Download Dokumen</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="panel-body">
                                <h3 class="green"><i class="fa fa-inbox"></i> Dinas Kesehatan</h3>
                                <br>
                                <div class="project_detail">
                                    <p class="title">Kegiatan</p>
                                    <p>Penyusunan Dokumen Perencanaan Perangkat Daerah</p>
                                    <p class="title">Sub Kegiatan</p>
                                    <p>Belanja Alat Bahan untuk Kegiatan Kantor-Alat Tulis Kantor</p>
                                </div>
                                <br>
                                <h5>File Project</h5>
                                <ul class="list-unstyled project_files">
                                    @foreach ($photos as $photo)
                                    <li><i class="fa fa-picture-o"></i> {{ $photo->name }}</li>
                                    @endforeach
                                </ul>
                                <br>
                                <div class="text-center mtop20">
                                    <a href="/laporanDokumentasi/{{ $subtask_id }}" class="btn btn-sm btn-warning">Print Laporan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->
@endsection