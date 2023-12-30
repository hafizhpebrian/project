@extends('layout.main');
@section('title','kategori')
    
@section('content')
    <h2 class="text-center">tabel kategori</h2>
        <table class="table table-striped-columns">
            <tr>
                <th>nama siswa</th>
                <th>nama pelajaran</th>
                <th>keterangan</th>
            </tr>
            @foreach ($kategori as $item)
            <tr>
                <td>{{$item['siswa']['nama']}}</td>
                <td>{{$item['pelajaran']['nama_pelajaran']}}</td>
                <td>{{$item['keterangan']}}</td>
            </tr>
            @endforeach
        </table>
@endsection