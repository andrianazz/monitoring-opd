@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
            <div class="x_panel">
                <div class="container">
                    <center>
                        <table width="625">
                            <tr>
                                <td>
                                    <center>
                                        <font size="5"> <b> LAPORAN DOKUMENTASI </b> </font><br>
                                        <font size="3"> <b> {{ $subtask->task->government->name }} </b> </font><br>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                            </tr>
                        </table>
                        <br>
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($data as $image)
                        <table width="625" border="1">
                            <tr>
                                <td rowspan="4" width="425" height="260">
                                    <center>
                                        <img src="{{ asset('laporan/' . $subtask->task->government->name . '/' . $subtask->task->name . '/' . $subtask->name .'/'. $image->name)  }}" alt="" srcset="" style="width: 95%; height: 256px;">
                                    </center>
                                </td>
                                <td width="200" style="background-color: #B3C6E7;">
                                    <center>
                                        <font size="2"> <b> {{ $subtask->task->name }} </b> </font>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                        <font size="2">{{ $subtask->name }}</font>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font size="2">Ket:</font><br><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                        <font size="2">Biro Administrasi Pembangunan</font>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <?php $i += 1; ?>

                        @if ($i % 3 == 0)
                        <br><br><br><br><br>
                        @endif
                        @endforeach
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection