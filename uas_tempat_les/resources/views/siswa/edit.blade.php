@extends ('layout.main')
@section ('title','tambah siswa')

@section ('content')
<div class="col-sm-12 col-xl-6">
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">siswa edit</h6>
      <form class="forms-sample" method="POST" action="{{ route('siswa.update', $siswa->id) }}">
        @csrf
        <div class="mb-3 form-group">
            <label for="name">nama siswa</label>
            <input type="text" class="form-control" name="nama" placeholder="nama siswa">
             @error('nama')
                <label class="text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="mb-3 form-group">
            <label for="name">tanggal lahir</label>
            <input type="date" class="form-control" name="nama" placeholder="tanggal lahir">
            @error('nama')
                <label class="text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="mb-3 form-group">
            <label for="name">nomor telepon</label>
            <input type="text" class="form-control" name="nama" placeholder="nomor telepon">
            @error('nama')
                <label class="text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="mb-3 form-group">
            <label for="name">email</label>
            <input type="text" class="form-control" name="nama" placeholder="email">
            @error('nama')
                <label class="text-danger">{{ $message }}</label>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
        <a href="{{ url('siswa') }}"class="btn btn-light">Batal</a>
      </form>
  </div>
</div>
@endsection