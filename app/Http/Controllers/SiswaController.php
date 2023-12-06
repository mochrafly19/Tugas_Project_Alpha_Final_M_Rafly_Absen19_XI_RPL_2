<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // Menampilkan daftar siswa
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', compact('siswa'));
    }

    // Menampilkan formulir untuk membuat siswa baru
    public function create()
{
    return view('siswacreate');
}


    // Menyimpan siswa baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'nama' => 'required',
            'nis' => 'required|unique:siswa_tabel',
            'jk' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
        ]);

        Siswa::create($request->all());
        return redirect()
       ->route('siswa')
       ->with('success', 'Berhasil ditambahkan.');

        }
    // Menampilkan data siswa yang akan diubah
    public function edit(Siswa $siswa)
    {
        return view('siswaedit', compact('siswa'));
    }

    // Menyimpan perubahan siswa ke database
    public function update(Request $request, Siswa $siswa)
{
    $request->validate([
        'nama' => 'required',
        'nis' => 'required|unique:siswa_tabel,nis,' . $siswa->id,
        'jk' => 'required',
        'alamat' => 'required',
        'tgl_lahir' => 'required',
    ]);

    $siswa->update($request->all());

    return redirect()
        ->route('siswa')
        ->with('success', 'Siswa berhasil diperbarui');
}

    // Menghapus siswa
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()
            ->route('siswa')
            ->with(['success' => 'Berhasil dihapus']);
    }
    public function show(Siswa $siswa)
    {
        return view('siswashow', compact('siswa'));
    }
}
