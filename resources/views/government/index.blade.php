@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Organisasi Pemerintahan Daerah</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Organisasi Pemerintah Daerah <small>OPD</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">Organisisasi yang bergerak di bidang Pemerintah Daerah Provinsi Riau</p>
                    @if (auth()->user()->id == 1)
                    <a href="/government/add" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah OPD</a>
                    @endif
                    <table id="datatable-buttons" class="table table-striped table-bordered table-responsive" width="100%">
                        <thead>
                            <tr>
                                <th width="20">No.</th>
                                <th>Organisasi Pemerintah Daerah</th>
                                <th>Alamat</th>
                                <th width="70">Status</th>
                                @if (auth()->user()->id == 1)
                                <th></th>
                                <th></th>
                                @endif


                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $row )

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->address }}</td>
                                <td>Aktif</td>

                                @if (auth()->user()->id == 1)
                                <td class="text-center"><a href="/government/{{ $row->id }}/edit" class="btn btn-info"> <i class="fa fa-edit"></i> Edit</a></td>
                                <td class="text-center"><button type="button" class="btn btn-danger swalDeleteGovernment" data-id='{{ $row->id }}' data-name=" {{ $row->name }} "><i class="fa fa-remove"></i>Hapus</button></td>
                                @endif
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