@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Profile Pegawai</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-xs-12 col-md-offset-2">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Profile Pegawai <small>Lengkapi Form berikut</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="/officer/{{ $data->id }}/updatePassword" method="POST" class="form-horizontal form-label-left input_mask">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Password Lama : </label>
                                <input type="password" name="password" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Password">
                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Password Baru : </label>
                                <input type="password" name="newPassword" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Password">
                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for=""> Konfirmasi Password Baru : </label>
                                <input type="password" name="newPassword2" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Password">
                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>

                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection