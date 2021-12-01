@extends('layout.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Seluruh Organisasi Pemerintah Daerah</h3>
            </div>
            <div class="title_right text-right">
                <select name="month" class="form-control">
                    <option value="" disabled>~~ Pilih Bulan~~</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="clearfix"></div>

                            <div class="row top_tiles">
                                @foreach ($government as $row)
                                <a href="/task/{{$row->id}}/show">
                                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="tile-stats" style="min-height: 280px; border: 2px grey solid;">
                                            <div class="count">{{ $task->where('government_id','=',$row->id)->count() }} Kegiatan</div>
                                            <h3 style="color: grey;"> {{ $row->name }} </h3>
                                            <p>{{ $row->address }}</p>
                                            <a href="/laporan/{{$row->id}}" class="btn btn-app" style="margin-top: 10px;margin-bottom: 20px;">
                                                <i class="fa fa-file-pdf-o"></i>Lihat Laporan
                                            </a>
                                            <a href="/laporan/{{$row->id}}/pdf" class="btn btn-app" style="margin-top: 10px;margin-bottom: 20px;">
                                                <i class="fa fa-file-pdf-o"></i> Download Laporan
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
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