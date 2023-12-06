@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Siswa</h1>
    <form method="POST" action="{{ route('siswa.update', $siswa) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="jk">Jenis Kelamin:</label>
            <input type="text" name="jk" value="{{ $siswa->jk }}" class="form-control" readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" readonly>{{ $siswa->alamat }}</textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="{{ $siswa->tgl_lahir }}" class="form-control" readonly>
        </div>
        <br>
    </form>
        <a href="{{ route('siswa') }}" class="btn btn-success">Kembali</a>
    </div>
</div>
</div>
@endsection