@extends('layout.main');
@section('title','siswa')
    
@section('content')
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-8">
            <h6 class="mb-0">daftar siswa</h6>
                <a href="{{route('siswa.create')}}"class="btn btn-link m-2">tambah</a>
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
            @foreach ($siswa as $item)
                    <tr>
                        <td>{{$item['nama']}}</td>
                        <td>{{$item['tanggal_lahir']}}</td>
                        <td>{{$item['nomor_telepon']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>
                            <div class="d-flex justify-content">
                                <a href="{{ route('siswa.edit', $item->id) }}">
                                    <button class="btn btn-danger btn-sm show_confirm">edit</button>
                                </a>
                            <form method="POST" action="{{ route('siswa.destroy', $item->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm show_confirm"
                                    data-toggle="tooltip" title='delete' data-nama='{{ $item->nama }}'>delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection