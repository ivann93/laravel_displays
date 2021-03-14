<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reseller;

class Display extends Model
{
    use HasFactory;

    public function reseller()
    {
        return $this->belongsTo(Display::class);
    }
}
