<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_grafik extends Model
{
    protected $table = "grafik";
    protected $primaryKey = "id_grafik";
    protected $fillable = [
        'positif', 'sembuh', 'meninggal'
    ];
}
