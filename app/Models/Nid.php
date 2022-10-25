<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nid extends Model
{
    use HasFactory;
    protected $table = 'nids';
    protected $fillable = [
        'People_id',
        'nid'
    ];

    public function people(){
        return $this->belongsTo(People::class);
    } 

}
