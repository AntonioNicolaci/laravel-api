<?php

namespace App\Models;

use App\Models\Work;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function works() {
        return $this->belongsToMany(Work::class);
    }
}
