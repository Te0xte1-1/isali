<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isal extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Services::class,'isal_detailse','service_id','service_id');
    }
}
