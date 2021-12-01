@extends('layout.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Pribadi</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Diri </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="avatar-view img-circle" width="250px" height="250px" src="{{ auth()->user()->image }}">
                                </div>
                            </div>
                            <h3>{{ auth()->user()->name }}</h3>
                            <h4>{{ auth()->user()->nip }}</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> {{ auth()->user()->government->name }}
                                </li>
                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> {{ auth()->user()->phone }}
                                </li>
                            </ul>

                            <a href="/officer/{{ auth()->user()->id }}/edit" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <a href="/officer/{{ auth()->user()->id }}/edit-password" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Ubah Password</a>
                            <br />
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Informasi Pribadi</h2>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Nama Lengkap : </label>
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ auth()->user()->name }}" disabled>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">USER ID : </label>
                                <input type="text" class="form-control" id="inputSuccess3" value="{{ auth()->user()->user_id }}" disabled>
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Email : </label>
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="{{ auth()->user()->email }}" disabled>
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Phone : </label>
                                <input type="text" class="form-control" id="inputSuccess5" value="{{ auth()->user()->phone }}" disabled>
                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label>Gender : </label>
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="{{ auth()->user()->gender }}" disabled>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Password : </label>
                                <input type="password" class="form-control" id="inputSuccess5" value="***********" disabled>
                                <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">NIP : </label>
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess5" value="{{ auth()->user()->nip }}" disabled>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="inputSuccess5" value="***********" disabled>
                                <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
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