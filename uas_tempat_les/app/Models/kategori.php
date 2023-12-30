<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory, HasUuids;

    public function siswa(){
        return $this->belongsTo(siswa::class,'id_siswa');
    }

    public function pelajaran(){
        return $this->belongsTo(pelajaran::class,'id_pelajaran');
    }
}
