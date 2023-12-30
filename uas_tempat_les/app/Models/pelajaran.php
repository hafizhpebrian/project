<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    use HasFactory, HasUuids;

    public function guru(){
        return $this->belongsTo(guru::class,'id_guru');
    }
}
