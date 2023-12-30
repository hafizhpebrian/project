@extends('layout.main');
@section('title','pelajaran')
    
@section('content')
    <h2 class="text-center">tabel pelajaran</h2>
        <table class="table table-striped-columns">
            <tr>
                <th>nama guru</th>
                <th>nama pelajaran</th>
                <th>deskripsi</th>
            </tr>
            @foreach ($pelajaran as $item)
            <tr>
                <td>{{$item['guru']['nama']}}</td>
                <td>{{$item['nama_pelajaran']}}</td>
                <td>{{$item['deskripsi']}}</td>
            </tr>
            @endforeach
        </table>
@endsection