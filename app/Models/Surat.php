<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
    public function penempatan()
    {
        return $this->belongsTo(Penempatan::class, 'penempatan_id');
    }
}
