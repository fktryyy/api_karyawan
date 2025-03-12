<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller {
    public function index() {
        return Karyawan::with('bank')->get();
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:karyawans',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'bank_id' => 'required|exists:banks,id',
        ]);

        return Karyawan::create($request->all());
    }

    public function show($id) {
        return Karyawan::with('bank')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());
        return $karyawan;
    }

    public function destroy($id) {
        return Karyawan::destroy($id);
    }
}

