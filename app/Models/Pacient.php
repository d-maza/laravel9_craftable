<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $table = 'pacient';

    protected $fillable = [
        'nom',
        'cognoms',
        'telefon',
        'curs_escolar',
        'data_naixement',
        'sex',
        'esports',
        'fecha',
        'referidor',
    
    ];
    
    
    protected $dates = [
        'data_naixement',
        'fecha',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/pacients/'.$this->getKey());
    }
}
