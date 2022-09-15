<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lagu;

class Penyanyi extends Model
{
    use HasFactory;
    protected $table = 'penyanyi';

    public function lagu(){
        return $this->hasMany(Lagu::class);
    }
}
