<?php

namespace App\Models;

use App\Models\Kamer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Klant extends Model
{
    use HasFactory;

    public function kamer()
    {
        return $this->hasOne(Kamer::class, 'Kamernummer');
    }

}
