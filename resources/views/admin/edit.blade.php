@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Profile Admin</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Profile Admin <small>Lengkapi Form berikut</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="/admin/update-photo" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6 col-xs-12 col-md-offset-3 text-center">
                            <img src="{{ asset($data->image) }}" class=" img-circle" alt="" srcset="" width="200px" height="200px">
                        </div>
                        <div class="col-md-4 col-xs-12 col-md-offset-5 text-center" style="margin-top: 10px;margin-bottom: 10px;">
                            <input type="file" name="image">
                        </div>
                        <div class="col-md-6 col-xs-12 col-md-offset-3 text-center">
                            <button type="submit" class="btn btn-primary">Ubah Foto</button>
                        </div>
                    </form>
                    <form action="/admin/update" method="POST" class="form-horizontal form-label-left input_mask">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Nama Lengkap : </label>
                            <input type="text" name="name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name" value="{{ $data->name }}">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">USER ID : </label>
                            <input type="text" name="user_id" class="form-control" id="inputSuccess3" placeholder="Last Name" value="{{ $data->user_id }}">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Email : </label>
                            <input type="text" name="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" value="{{ $data->email }}">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Phone : </label>
                            <input type="text" name="phone" class="form-control" id="inputSuccess5" placeholder="Phone" value="{{ $data->phone }}">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label>Jenis Kelamin *:</label>
                            <p>
                                Pria :
                                <input type="radio" class="flat" name="gender" id="genderM" value="Pria" {{ $data->gender == 'Pria' ? 'checked' : ''  }} />
                                Wanita :
                                <input type="radio" class="flat" name="gender" id="genderF" value="Wanita" {{ $data->gender == 'Wanita' ? 'checked' : ''  }} />
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">NIP : </label>
                            <input type="text" name="nip" class="form-control" id="inputSuccess5" placeholder="Phone" value="{{ $data->nip }}">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="">Alamat : </label>
                            <input type="text" name="address" class="form-control" id="inputSuccess5" placeholder="Phone" value="{{ $data->address }}">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="heard">Organisasi Pemerintah Daerah:</label>
                            <select id="heard" name="government_id" class="form-control" required>
                                <option value="">~~ Pilih Organisasi Pemerintah Daerah ~~</option>
                                <option value="{{ $data->government_id }}" selected>{{ $data->government->name }}</option>
                            </select>
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