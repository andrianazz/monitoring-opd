@extends('layout.main')

@section('content')

<!-- page content -->
<div class="right_col" role="main">

    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-tasks"></i></div>
                <div class="count">{{ $task->count() }}</div>
                <h3>Kegiatan</h3>
                <p>Kegiatan pada Seluruh OPD</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-tasks"></i></div>
                <div class="count">{{ $subtask->count() }}</div>
                <h3>Sub Kegiatan</h3>
                <p>Seluruh Sub Kegiatan pada OPD</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-building"></i></div>
                <div class="count">{{ $government->count() }}</div>
                <h3>OPD</h3>
                <p>Organisasi perangkat daerah yang terdaftar</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count">{{ $officer->count() }}</div>
                <h3>Pegawai</h3>
                <p>Data Pegawai yang terdaftar pada seluruh OPD</p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Organisasi Pernagkat Daerah <small>OPD</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">Organisisasi yang bergerak di bidang Pemerintah Daerah Provinsi Riau</p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th width="20">No.</th>
                                <th>Organisasi Perangkat Daerah</th>
                                <th width="70">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($government as $opd)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $opd->name }}</td>
                                <td>Aktif</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Pegawai<small>Pegawai</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">Seluruh Data Pegawai yang tergabung ke dalam Sistem</p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="20">No.</th>
                                <th>Nama Lengkap</th>
                                <th width="120">NIP</th>
                                <th>Email</th>
                                <th width="70">Akses</th>
                                <th>Organisasi Perangkat Daerah</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $x=1;
                            @endphp
                            @foreach ($officer as $job)
                            <tr>
                                <td>{{ $x++ }}</td>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->nip }}</td>
                                <td>{{ $job->email}}</td>
                                <td>{{ $job->government_id == 1 ? 'ADMIN' : 'USER' }}</td>
                                <td>{{ $job->government->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection