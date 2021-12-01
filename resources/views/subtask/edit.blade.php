@php
function rupiah($angka)
{

$hasil_rupiah = number_format($angka,0,'','.');
return $hasil_rupiah;
}
@endphp
@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Belanja</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Edit Belanja <small>Lengkapi Form berikut ini</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="POST" action="/subtask/{{ $data->id }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Belanja <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addrress">Pagu <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="text" id="dengan-rupiah" id="addrress" name="pagu" required="required" class="form-control col-md-7 col-xs-12" value="{{ rupiah($data->pagu) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addrress">Tanggal <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="date" id="addrress" name="date" required="required" class="form-control col-md-7 col-xs-12" value="{{$data->date}}">
                            </div>
                        </div>
                        <input type="hidden" name="task_id" value="{{ $task }}">
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-danger" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success text-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection