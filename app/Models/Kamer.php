<?php

namespace App\Models;

use App\Models\Klant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamer extends Model
{
    use HasFactory;

    public function klant()
    {
        return $this->hasOne(Klant::class);
    }

    public function reserverings()
    {
        return $this->hasOne(Reservering::class);
    }
}
