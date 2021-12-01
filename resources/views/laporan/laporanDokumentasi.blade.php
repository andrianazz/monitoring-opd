@extends('layout.main')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
        </div>
        <div class="container">
            <table width="100%" class="mt-5">
                <tr class="text-center align-top" height="40px">
                    <td class="h3 font-weight-bold"> <b> {{ $subtask->task->government->name }} Tahun 2021 </b></td>
                </tr>
                <tr class="text-center align-top" height="40px">
                    <td class="h3 font-weight-bold"> <b> {{ $subtask->task->name }} </b> </td>
                </tr>
                <tr class="text-center align-top" height="49px">
                    @php
                    setlocale(LC_TIME, 'id_ID');
                    @endphp
                    <td class="h3 font-weight-bold"> <b> {{ $subtask->name }} </b></td>
                </tr>
                <tr class="text-center">
                    <td>======================================================================================</td>
                </tr>
                <tr height="80px">
                    <td></td>
                </tr>
                @foreach ($data as $image)
                <tr class="text-center">
                    <td>
                        <img style="border: solid 10px grey; border-radius: 20px;" src="{{ asset('laporan/' . $subtask->task->government->name . '/' . $subtask->task->name . '/' . $subtask->name .'/'. $image->name)  }}" alt="" width="500" height="300">
                    </td>
                </tr>
                <tr height="40px">
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection