@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Siswa</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/siswa" id="siswaForm">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" name="nis" id="nis" class="form-control" value="{{ old('nis') }}">
            <span id="nis-error" style="color: red;">{{ $errors->first('nis') }}</span>
        </div>
        <br>
        <div class="form-group">
            <label for="jk">Jenis Kelamin:</label>
            <select name="jk" class="form-control" required>
                <option value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}" required>
        </div>
        <br>
        <button type="button" class="btn btn-success" onclick="showConfirmationModal()">Create</button>
    </form>

    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Create</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin membuat data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" onclick="submitForm()">Create</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function showConfirmationModal() {
        $('#confirmModal').modal('show');
    }

    function submitForm() {
        $('#siswaForm').submit();
    }
</script>
@endsection
