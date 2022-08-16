<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruKelazMapel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'guru_id',
        'kelaz_id',
        'mapel_id',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kelaz()
    {
        return $this->belongsTo(Kelaz::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

}
