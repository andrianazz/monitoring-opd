@extends('layout.main')

@section('content')

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Tambah Data Pegawai</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah Pegawai <small>Lengkapi Form berikut</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="/officer/insert" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left input_mask">
                        @csrf
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Nama Lengkap : </label>
                            <input type="text" name="name" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name" required>
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">USER ID : </label>
                            <input type="text" name="user_id" class="form-control" id="inputSuccess3" placeholder="User ID" required>
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Email : </label>
                            <input type="email" name="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" required>
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Phone : </label>
                            <input type="tel" name="phone" class="form-control" id="inputSuccess5" placeholder="Phone">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="">NIP : </label>
                            <input type="tel" name="nip" class="form-control" id="inputSuccess5" placeholder="NIP" required>
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label>Jenis Kelamin :</label>
                            <p>
                                Pria:
                                <input type="radio" class="flat" name="gender" id="genderM" value="Pria" checked="" required />
                                Wanita:
                                <input type="radio" class="flat" name="gender" id="genderF" value="Wanita" />
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Password : </label>
                            <input type="password" name="password" class="form-control" id="inputSuccess5" placeholder="Password" required>
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label for="">Konfirmasi Password</label>
                            <input type="password" name="password2" class="form-control" id="inputSuccess5" placeholder="Confirm Password" required>
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="">Alamat : </label>
                            <input type="text" name="address" class="form-control" id="inputSuccess5" placeholder="Address" required>
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <label for="heard">Organisasi Pemerintah Daerah:</label>
                            <select id="heard" name="government_id" class="form-control" required>
                                <option value="2">~~ Pilih Organisasi Pemerintahan Daerah ~~</option>
                                @foreach ($government as $row)
                                <option value=" {{ $row->id }} ">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>

                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection