@extends('layout.main');
@section('title','guru')
    
@section('content')
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-8">
            <h6 class="mb-0">daftar guru</h6>
                <a href="{{route('guru.create')}}"class="btn btn-link m-2">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>nama</th>
                        <th>tanggal lahir</th>
                        <th>nomor telepon</th>
                        <th>email</th><th>aksi</th>
                    </tr>
                </thead>
            @foreach ($guru as $item)
                    <tr>
                        <td>{{$item['nama']}}</td>
                        <td>{{$item['tanggal_lahir']}}</td>
                        <td>{{$item['nomor_telepon']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>
                            <form method="POST" action="{{ route('guru.destroy', $item->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm show_confirm"
                                data-toggle="tooltip" title='delete' data-nama='{{ $item->nama }}'>delete</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection