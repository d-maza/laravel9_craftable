<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Full extends Model
{
    protected $table = 'full';

    protected $fillable = [
        'pacient_id',
        'data_examen',
        'data_examen_mod',
    
    ];
    
    
    protected $dates = [
        'data_examen',
        'data_examen_mod',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/fulls/'.$this->getKey());
    }
}
