<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan PDF</title>
    <!-- Bootstrap -->
    <link href="{{ asset('../vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('../build/css/custom.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <table width='100%' class="mt-5">
            <tr>
                <th width='10.6%'></th>
                <th width='25.9%'></th>
                <th width='2.31%'></th>
                <th width='3.54%'></th>
                <th width='7.40%'></th>
                <th width='7.25%'></th>
                <th width='7.25%'></th>
                <th width='7.25%'></th>
                <th width='10.95%'></th>
                <th width='7.25%'></th>
                <th width='7.25%'></th>
                <th width='15.8%'></th>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h1 font-weight-bolder"> <b> LAPORAN KEUANGAN</b> </td>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h2 font-weight-bolder">======================================
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h3 font-weight-bold"> <b> SEKRETARIAT DAERAH PROVINSI RIAU </b> </td>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h3 font-weight-bold"> <b> BIRO ADMINISTRASI PEMBANGUNAN </b></td>
            </tr>
            <!-- <tr height='500px'>
                <td colspan="12"></td>
            </tr> -->
            <tr>
                <td><br><br></td>
            </tr>
            <tr>
                <td class="h4 text-right"></td>
                <td class="h4">
                    <b>Nama OPD</b>
                </td>
                <td class="h4 text-center">:</td>
                <td colspan="9" class="h4">{{ $government->name }}</td>
            </tr>
            <tr>
                <td class="h4 text-right"></td>
                <td class="h4"><b> Hari/Tanggal </b></td>
                <td class="h4 text-center">:</td>
                <td colspan="9" class="h4">{{ date('l, d-m-Y') }}</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td class="h4 text-right"></td>
                <td class="h4"> <b> Jumlah Kegiatan </b> </td>
                <td class="h4 text-center">:</td>
                <td colspan="9" class="h4">{{$task->count()}} Kegiatan</td>
            </tr>
            <tr>
                <td class="h4 text-right"></td>
                <td class="h4"> <b>Total Pagu </b> </td>
                <td class="h4 text-center">:</td>
                <td colspan="9" class="h4">Rp. {{ number_format($task->sum('total'), 0, '', ',') }}</td>
            </tr>
            <tr height="21px">
                <td colspan="12"></td>
            </tr>
            <tr>
                <td><br><br></td>
            </tr>
            <tr>
                <td colspan="12" class="h3 font-weight-bold px-3 hasil"> <b> DESKRIPSI KEGIATAN </b> </td>
            </tr>
            <tr height="21">
                <td colspan="12"></td>
            </tr>
            @php
            $i = 0;
            $x=1;
            @endphp
            @foreach ($task as $t)
            <tr>
                <td class="h4 text-right align-top"><b>{{$x++ }}.</b></td>
                <td colspan="10" class="h4"> <b> {{ $t->name }} </b>
                </td>
            </tr>
            @foreach ($subtask[$i] as $sub)
            <tr>
                <td class="h5 text-right align-top"></td>
                <td colspan="9" class="h5">*
                    {{ $sub['name'] }}
                </td>
                <td colspan="2" class="h5">Rp.
                    {{ number_format($sub['pagu'], 0, '', ',')  }}
                </td>
            </tr>
            @endforeach
            <?php $i++ ?>
            @endforeach
            <tr height="21">
                <td colspan="12"><br><br><br><br></td>
            </tr>
            <tr height="51">
                <td colspan="12"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
                <td colspan="3" class="h4 text-center"> Mengetahui </td>
                <td></td>
            </tr>
            <tr height="65">
                <td colspan="12"></td>
            </tr>
            <tr>
                <td><br><br><br></td>
            </tr>
            <tr>
                <td colspan="8"></td>
                <td colspan="3" class="h4 text-center font-weight-bold"><b> Aryadi. S.sos </b></td>
                <td></td>
            </tr>
            <tr height="51">
                <td colspan="12"></td>
            </tr>
        </table>
    </div>

    <!-- Bootstrap -->
    <script src="{{ asset('../vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('../build/js/custom.min.js') }}"></script>
</body>

</html>