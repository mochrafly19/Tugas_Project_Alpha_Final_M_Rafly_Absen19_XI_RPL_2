@extends('layouts.app')

@section('content')
    <div class="judul2">
        <h1>Daftar Siswa</h1>
        <a href="{{ route('siswacreate') }}" class="btn btn-success">Tambah Siswa</a>
    </div>
    <br>

    @if(session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->jk }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->tgl_lahir }}</td>
                    <td>
                        <a href="{{ route('siswashow', $siswa->id) }}" class="btn btn-success">Lihat</a>
                        <a href="{{ route('siswaedit', $siswa->id) }}" class="btn btn-success">Edit</a>

                        <!-- Button to trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirmDelete{{ $siswa->id }}">
                            Hapus
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="confirmDelete{{ $siswa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus <b>{{$siswa->nama}}</b> ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                                        <form method="POST" action="{{ route('siswa.destroy', $siswa->id) }}" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>    
    </table>
@endsection
