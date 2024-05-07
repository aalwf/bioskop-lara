<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTickets extends Model
{
    use HasFactory;

    public function purchase()
    {
        return $this->belongsTo(Purchases::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    protected $guarded = ['id'];
}
