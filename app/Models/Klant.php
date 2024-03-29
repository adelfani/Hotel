<?php

namespace App\Models;

use App\Models\Kamer;
use App\Models\Reservering;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Klant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kamer()
    {
        return $this->belongsTo(Kamer::class);
    }

    public function reserverings()
    {
        return $this->hasOne(Reservering::class);
    }

    protected $with = ['reserverings'];
}
