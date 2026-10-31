<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Isal_detailse extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table= 'isal_detailse';
    protected $fillable = ['isal_id','service_id','service_price'];
    protected $hidden = ['id','created_at','updated_at'];


}
