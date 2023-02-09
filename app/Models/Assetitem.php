<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assetitem extends Model
{
    use HasFactory;
    //data will return from model table
    public function Itemmodel()
    {
        return $this->belongsTo(Itemmodel::class);
    }


    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
