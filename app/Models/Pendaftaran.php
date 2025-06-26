<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{

    protected $table = 'pendaftaran';
    protected $guarded = ['id'];
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'peserta_id');
    }
}
