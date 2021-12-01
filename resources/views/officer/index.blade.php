@extends('layout.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Pegawai</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <a href="/officer/add" class="btn btn-primary {{ auth()->user()->id > 1 ? 'hidden' : '' }}"> <i class="fa fa-plus"></i>Tambah Pegawai</a>
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div> -->
                            <div class="clearfix"></div>
                            @foreach ($data as $row)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                <div class="well profile_view">
                                    <div class="col-sm-12">
                                        <div class="left col-xs-7">
                                            <h2>{{ strtoupper($row->name) }}</h2>
                                            <p><strong>OPD: </strong> {{ $row->government->name }} </p>
                                            <p><strong> {{ $row->nip }} </strong> </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-user"></i> Gender : {{ $row->gender }}</li>
                                                <li><i class="fa fa-building"></i> Address : {{ $row->address }}</li>
                                                <li><i class="fa fa-phone"></i> Phone : {{ $row->phone }}</li>
                                            </ul>
                                        </div>
                                        <div class="right col-xs-5 text-center">
                                            <img src="{{ $row->image }}" alt="" class="img-circle" width="150px" height="150px">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 bottom text-center">
                                        <div class="col-xs-12 col-sm-6 emphasis"></div>
                                        <div class="col-xs-12 col-sm-6 emphasis">
                                            @if (auth()->user()->id == 1)
                                            <form action="/officer/{{ $row->id }}/delete" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <!-- <button type="submit" class="btn btn-danger btn-xs"> <i class=" fa fa-remove"></i> Hapus</button> -->

                                                <button type="button" class="btn btn-danger btn-xs swalDeleteOfficer" data-id="{{ $row->id }}" data-name="{{ $row->name }}"> <i class="fa fa-user">
                                                    </i> <i class="fa fa-remove"></i> </button>
                                                <a href="/officer/{{ $row->id }}/edit" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-user"> </i> Lihat Profile
                                                </a>
                                                <a href="/officer/{{ $row->id }}/edit-password" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-user"> </i> Ubah Password
                                                </a>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection