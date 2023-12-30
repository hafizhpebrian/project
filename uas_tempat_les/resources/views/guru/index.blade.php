@extends('layout.main');
@section('title','guru')
    
@section('content')
    <h2 class="text-center">tabel guru</h2>
        <table class="table table-striped-columns">
            <tr>
                <th>nama </th>
                <th>tanggal lahir</th>
                <th>nomor telepon</th>
                <th>email</th>
            </tr>
            @foreach ($guru as $item)
            <tr>
                <td>{{$item['nama']}}</td>
                <td>{{$item['tanggal_lahir']}}</td>
                <td>{{$item['nomor_telepon']}}</td>
                <td>{{$item['email']}}</td>
            </tr>
            @endforeach
        </table>
@endsection