@extends('layouts.app')

@section('content')
<div class="content2">
    <h1>Edit Siswa</h1>


    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}" id="editForm">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
            <span id="nis-error" style="color: red;">{{ $errors->first('nis') }}</span>
        </div>
        <br>
        <div class="form-group">
            <label for="jk">Jenis Kelamin:</label>
            <select name="jk" class="form-control" required>
                <option value="Laki-laki" {{ $siswa->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $siswa->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" required>{{ $siswa->alamat }}</textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}" required>
        </div>
        <br>
        <div id="liveAlertPlaceholder"></div>
        <button type="button" class="btn btn-success" id="liveAlertBtn">Update</button>
    </form>
</div>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin melakukan update?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" onclick="submitForm()">Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to show confirmation modal
    function showConfirmationModal() {
        $('#confirmModal').modal('show');
    }

    // Function to submit the form
    function submitForm() {
        $('#editForm').submit();
    }

    // Event listener for the button click
    document.getElementById('liveAlertBtn').addEventListener('click', showConfirmationModal);
    function showConfirmationModal() {
    if ($('#editForm')[0].checkValidity()) {
        $('#confirmModal').modal('show');
    } else {
        $('#liveAlertPlaceholder').html('<div class="alert alert-danger">Formulir tidak valid. Silakan periksa kembali.</div>');
    }
}

// Event listener for the button click
document.getElementById('liveAlertBtn').addEventListener('click', showConfirmationModal);
</script>
@endsection
