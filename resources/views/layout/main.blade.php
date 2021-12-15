<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monitoring | {{ $title }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('../vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('../vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('../vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('../vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('../vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="{{ asset('../vendors/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('../vendors/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">


    <!-- Custom Theme Style -->
    <link href="{{ asset('../build/css/custom.min.css') }}" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('build/css/stylesheet.css') }}">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title">
                            <img src="{{ asset('images/logo.png') }}" width="30"></img>
                            <span> <b>Monitoring OPD</b> </span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset(auth()->user()->image) }}" alt="..." class="img-circle profile_img" width="50px" height="50px">
                        </div>
                        <div class="profile_info">
                            <span>{{ auth()->user()->government_id == 1 ? "ADMIN SISTEM" : 'USER' }}</span>
                            <h2> <b>{{ auth()->user()->name }}</b> </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Umum</h3>
                            <ul class="nav side-menu">
                                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="/task/{{ date('m') }}"><i class="fa fa-bar-chart-o"></i> Kegiatan</a></li>
                                <li><a><i class="fa fa-sitemap"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/government">Organisasi Perangkat Daerah</a></li>
                                        <li><a href="/officer">Data Pegawai</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Pengaturan</h3>
                            <ul class="nav side-menu">
                                <li><a href="/admin"><i class="fa fa-bug"></i> Pengaturan Akun</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            @if ($title != "Laporan")
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="" class="images user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset(auth()->user()->image) }}">{{ auth()->user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="/admin"> Profile</a></li>
                                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @endif
            <!-- /top navigation -->

            @yield('content')

            <!-- footer content -->
            @if ($title != "Laporan")
            <footer>
                <div class="pull-right">
                    Copyright : UIN SUSKA RIAU - Andrian Wahyu
                </div>
                <div class="clearfix"></div>
            </footer>
            @endif
            <!-- /footer content -->
        </div>
    </div>


    <!-- jQuery -->
    <script src="{{ asset('../vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('../vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('../vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('../vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('../vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('../vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('../vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('../vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('../vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Dropzone.js -->
    <script src="{{ asset('../vendors/dropzone/dist/min/dropzone.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('../vendors/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- validator -->
    <script src="{{ asset('../vendors/validator/validator.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('../build/js/custom.min.js') }}"></script>
    <script>
        $('.swalDeleteGovernment').click(function() {
            var opdID = $(this).attr('data-id');
            var opdNama = $(this).attr('data-name');


            Swal.fire({
                title: ' Menghapus ' + opdNama,
                text: " Apa kamu yakin menghapus " + opdNama + " ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/government/' + opdID + '/delete',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(data) {}
                    });
                    window.location = '/government';
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        "success"
                    );
                }
            })
        });
    </script>
    <script>
        $('.swalDeleteOfficer').click(function() {
            var officerID = $(this).attr('data-id');
            var officerNama = $(this).attr('data-name');

            Swal.fire({
                title: ' Menghapus ' + officerNama,
                text: " Apa kamu yakin menghapus " + officerNama + "?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/officer/' + officerID + '/delete',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(data) {}
                    });
                    window.location = '/officer';
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        "success"
                    );
                }
            })
        });
    </script>
    <script>
        $('.swalDeletePhoto').click(function() {
            var photoID = $(this).attr('data-id');
            var subtaskID = $(this).attr('data-in');


            Swal.fire({
                title: ' Menghapus Dokumentasi ini',
                text: " Apa kamu yakin menghapus Dokumentasi ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/delete-photo/' + photoID,
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(data) {}
                    });
                    window.location = '/subtask/' + subtaskID + "upload";
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        "success"
                    );
                }
            });
        });
    </script>
    <script>
        $('.swalDeleteTask').click(function() {
            var taskID = $(this).attr('data-id');
            var governID = $(this).attr('data-id2');
            var taskName = $(this).attr('data-name');



            Swal.fire({
                title: 'Menghapus Kegiatan ini',
                text: " Apa kamu yakin menghapus " + taskName + " ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/task/' + taskID + '/delete',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(data) {}
                    });
                    window.location = '/task/' + governID + "/show";
                    window.location.reload();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        "success"
                    );
                }
            });
        });
    </script>
    <script>
        $('.swalDeleteSubTask').click(function() {
            var subtaskID = $(this).attr('data-id');
            var taskID = $(this).attr('data-id2');
            var subtaskName = $(this).attr('data-name');



            Swal.fire({
                title: ' Menghapus Kegiatan ini',
                text: " Apa kamu yakin menghapus " + subtaskName + " ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/subtask/' + subtaskID + '/delete',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(data) {}
                    });
                    window.location = '/task/' + taskID + "/subtask";
                    window.location.reload();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        "success"
                    );
                }
            });
        });
    </script>

    <script>
        /* Dengan Rupiah */
        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, '');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
        }
    </script>


</body>

</html>