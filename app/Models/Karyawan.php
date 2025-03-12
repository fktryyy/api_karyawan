<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model {
    use HasFactory;
    protected $fillable = ['nama', 'nik', 'tgl_lahir', 'alamat', 'bank_id'];

    public function bank() {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}

