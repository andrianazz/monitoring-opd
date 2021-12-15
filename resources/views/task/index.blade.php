@extends('layout.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Seluruh Organisasi Perangkat Daerah</h3>
            </div>
            <div class="title_right text-right">
                <div class="row">
                    <form action="" method="get">
                        @csrf
                        <div class="col-md-4 col-md-offset-7">
                            <select name="month" class="form-control">
                                <option value="" disabled>~~ Pilih Bulan~~</option>
                                <option value="1" {{ $bulan == 1 ? 'selected' : '' }}>Januari</option>
                                <option value="2" {{ $bulan == 2 ? 'selected' : '' }}>Februari</option>
                                <option value="3" {{ $bulan == 3 ? 'selected' : '' }}>Maret</option>
                                <option value="4" {{ $bulan == 4 ? 'selected' : '' }}>April</option>
                                <option value="5" {{ $bulan == 5 ? 'selected' : '' }}>Mei</option>
                                <option value="6" {{ $bulan == 6 ? 'selected' : '' }}>Juni</option>
                                <option value="7" {{ $bulan == 7 ? 'selected' : '' }}>Juli</option>
                                <option value="8" {{ $bulan == 8 ? 'selected' : '' }}>Agustus</option>
                                <option value="9" {{ $bulan == 9 ? 'selected' : '' }}>September</option>
                                <option value="10" {{ $bulan == 10 ? 'selected' : '' }}>Oktober</option>
                                <option value="11" {{ $bulan == 11 ? 'selected' : '' }}>November</option>
                                <option value="12" {{ $bulan == 12 ? 'selected' : '' }}>Desember</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">GET</button>
                        </div>
                    </form>
                </div>
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
                                <a href="/task/{{$row->id}}/show/{{$bulan}}">
                                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="tile-stats" style="min-height: 280px; border: 2px grey solid;">
                                            <div class="count">{{ $task->where('government_id','=',$row->id)->count() }} Kegiatan</div>
                                            <h3 style="color: grey;"> {{ $row->name }} </h3>
                                            <p>{{ $row->address }}</p>
                                            <a href="/laporan/{{$row->id}}/{{$bulan}}" class="btn btn-app" style="margin-top: 10px;margin-bottom: 20px;">
                                                <i class="fa fa-file-pdf-o"></i>Lihat Laporan
                                            </a>
                                            <!-- <a href="/laporan/{{$row->id}}/pdf" class="btn btn-app" style="margin-top: 10px;margin-bottom: 20px;">
                                                <i class="fa fa-file-pdf-o"></i> Download Laporan
                                            </a> -->
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