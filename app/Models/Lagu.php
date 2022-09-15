<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    use HasFactory;
    protected $table = 'lagu';
    protected $primaryKey = 'id';

    protected $fillable = [
        'judul_lagu'
    ];

    public function penyanyi(){
        return $this->belongsTo(Penyanyi::class);
    }
}
