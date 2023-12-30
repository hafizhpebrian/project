@extends('layout.main');
@section('title','pendaftaran')
    
@section('content')
    <h2 class="text-center">tabel pendaftaran</h2>
        <table class="table table-striped-columns">
            <tr>
                <th>nama siswa</th>
                <th>tanggal daftar</th>
            </tr>
            @foreach ($pendaftaran as $item)
            <tr>
                <td>{{$item['siswa']['nama']}}</td>
                <td>{{$item['tanggal_pendaftaran']}}</td>

            </tr>
            @endforeach
        </table>
@endsection