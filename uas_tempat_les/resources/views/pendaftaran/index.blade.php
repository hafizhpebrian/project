@extends('layout.main');
@section('title','pendaftaran')
    
@section('content')
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-8">
            <h6 class="mb-0">daftar pendaftaran</h6>
                <a href="{{route('pendaftaran.create')}}"class="btn btn-link m-2">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>nama siswa</th>
                        <th>tanggal daftar</th><th>aksi</th>
                    </tr>
                </thead>
            @foreach ($pendaftaran as $item)
                    <tr>
                        <td>{{$item['siswa']['nama']}}</td>
                        <td>{{$item['tanggal_pendaftaran']}}</td>
                        <td>
                            <form method="POST" action="{{ route('pendaftaran.destroy', $item->id) }}">
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