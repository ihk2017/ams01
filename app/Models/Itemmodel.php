<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemmodel extends Model
{
    use HasFactory;

    public function ItemType()
    {
        return $this->belongsTo(ItemType::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
