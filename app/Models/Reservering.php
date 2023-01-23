<?php

namespace App\Models;

use App\Models\Kamer;
use App\Models\Klant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservering extends Model
{
    use HasFactory;

    public function kamer()
    {
        return $this->belongsTo(Kamer::class);
    }

    public function klant()
    {
        return $this->belongsTo(Klant::class);
    }
}
