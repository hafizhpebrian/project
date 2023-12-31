@extends('layout.main');
@section('title','pelajaran')
    
@section('content')
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-8">
            <h6 class="mb-0">daftar pelajaran</h6>
                <a href="{{route('pelajaran.create')}}"class="btn btn-link m-2">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>nama guru</th>
                        <th>nama pelajaran</th>
                        <th>deskripsi</th><th>aksi</th>
                    </tr>
                </thead>
            @foreach ($pelajaran as $item)
                    <tr>
                        <td>{{$item['guru']['nama']}}</td>
                        <td>{{$item['nama_pelajaran']}}</td>
                        <td>{{$item['deskripsi']}}</td>
                        <td>
                            <form method="POST" action="{{ route('pelajaran.destroy', $item->id) }}">
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