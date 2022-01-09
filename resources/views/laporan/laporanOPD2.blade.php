@php
setlocale(LC_TIME, 'id_ID');
@endphp

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
                                <td rowspan="2"> <img src="{{ asset('images/riau.png') }}" width="70" alt=""> </td>
                                <td>
                                    <center>
                                        <font size="5"> <b> PEMERINTAH PROVINSI RIAU </b> </font><br>
                                        <font size="6"> <b> SEKRETARIAT DAERAH </b> </font><br>
                                        <font size="2">Jln. Jend. Sudirman No. 460 Telp. (0761) 33749, 33180, 40302, 40307 Fax. (0761) 33477</font><br>
                                        <font size="2">PEKANBARU</font>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <table width="625">
                            <tr>
                                <td class="right">
                                    <font size="2">Kode Pos : 28126</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <hr style="border: 1px solid #000; color: #000;">
                                </td>
                            </tr>
                        </table>
                        <table width="600">
                            <tr>
                                <td class="right" colspan="4">
                                    <font size="2">Pekanbaru, {{ date('d F Y') }}</font>
                                </td>
                            </tr>
                            <tr height="5">
                                <td></td>
                            </tr>
                            <tr>
                                <td width="100">
                                    <font size="2">Nomor </font>
                                </td>
                                <td width="10">
                                    <font size="2">:</font>
                                </td>
                                <td>
                                    <font size="2"> </font>
                                </td>
                                <td width="180">
                                    <font size="2">Kepada Yth.</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font size="2">Lampiran </font>
                                </td>
                                <td>
                                    <font size="2">:</font>
                                </td>
                                <td>
                                    <font size="2"> - </font>
                                </td>
                                <td>
                                    <font size="2">Kepala Biro</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font size="2">Hal </font>
                                </td>
                                <td>
                                    <font size="2">:</font>
                                </td>
                                <td>
                                    <font size="2">Laporan Keuangan SKPD</font>
                                </td>
                                <td>
                                    <font size="2">Administrasi Pembangunan</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font size="2"></font>
                                </td>
                                <td>
                                    <font size="2"></font>
                                </td>
                                <td class="top">
                                    <font size="2">{{ $government->name }}</font>
                                </td>
                                <td class="">
                                    <font size="2">Sekretariat Daerah Riau <br>Di -</font>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3"></td>
                                <td class="center">
                                    <font size="2">Tempat</font>
                                </td>
                            </tr>
                        </table>
                        <br>
                        @php
                        $dateObj = DateTime::createFromFormat('!m', $bulan);
                        $monthName = $dateObj->format('F');
                        @endphp
                        <table width="620">
                            <tr>
                                <td class="text">
                                    <font size="2">Assalamua'laikum wr. wb., <br> Bersamaan surat ini kami sampaikan Satuan Kerja Perangkat Daerah
                                        {{ $government->name }} menyampaikan Laporan Keuangan pada bulan {{ $monthName }} {{ date('Y') }}.
                                        Sehubungan hal tersebut, diharapkan dapat melakukan tinjauan sesuai dengan deskripsi kegiatan sebagai berikut :
                                    </font>
                                </td>
                            </tr>
                        </table>
                        <table>
                        </table>
                        <table width="620" style="border-collapse: collapse;border: 1px solid black;">
                            <tr>
                                <th width="30">
                                    <font size="2">No.</font>
                                </th>
                                <th>
                                    <font size="2">Uraian Kegiatan</font>
                                </th>
                                <th width="150">
                                    <font size="2">
                                        <center> Keuangan </center>
                                    </font>
                                </th>
                            </tr>

                            @php
                            $i = 0;
                            $x=1;
                            @endphp
                            @foreach ($task as $t)
                            <tr style="background-color: #E9EBEF;">
                                <td class="center">
                                    <font size="2">{{$x++ }}.</font>
                                </td>
                                <td colspan="2">
                                    <font size="2"><b>{{ $t->name }}</b></font>
                                </td>
                            </tr>
                            @foreach ($subtask[$i] as $sub)
                            <tr>
                                <td></td>
                                <td>
                                    <font size="2">- {{ $sub['name'] }} </font>
                                </td>
                                <td class="price">
                                    <font size="2"> Rp. {{ number_format($sub['pagu'], 0, '', ',')  }}</font>
                                </td>
                            </tr>
                            @endforeach
                            <?php $i++ ?>
                            @endforeach


                            <tr style="background-color: #E9EBEF;">
                                <td class="right" colspan="2">
                                    <font size="2"> <b> Jumlah : </b></font>
                                </td>
                                <td class="price">
                                    <font size="2"> <b> Rp. {{ number_format($task->sum('total'), 0, '', ',') }} </b> </font>
                                </td>
                            </tr>
                        </table>
                        <table width="625">
                            <tr>
                                <td>
                                    <font size="2">Demikian disampaikan, untuk dimaklumi</font>
                                </td>
                            </tr>
                        </table>

                        <table width="625">
                            <tr>
                                <td width="420"><br><br><br><br></td>
                                <td class="center"> <b> Kepala Sub Bagian<br>
                                        Pengendalian APBD<br><br><br>
                                        <u> {{ $user->name }} </u><br>
                                        NIP. {{ $user->nip }}
                                    </b></td>
                            </tr>
                        </table>
                        <br>
                        <table width="625">
                            <tr>
                                <td>
                                    <font size="2"> <b>Tembusan : </b></font>
                                </td>
                            </tr>
                            <tr>
                                <td> <b> 1. Sekretariat Daerah Provinsi Riau </b> </td>
                            </tr>
                        </table>
                        <br><br>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.print();
</script>
@endsection