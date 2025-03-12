<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller {
    public function index() {
        return Bank::all();
    }

    public function store(Request $request) {
        $request->validate([
            'nama_bank' => 'required|unique:banks',
        ]);

        return Bank::create($request->all());
    }

    public function show($id) {
        return Bank::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $bank = Bank::findOrFail($id);
        $bank->update($request->all());
        return $bank;
    }

    public function destroy($id) {
        return Bank::destroy($id);
    }
}

