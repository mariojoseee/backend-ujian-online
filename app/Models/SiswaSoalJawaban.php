<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaSoalJawaban extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }

    public function jawaban()
    {
        return $this->belongsTo(Jawaban::class);
    }
}
