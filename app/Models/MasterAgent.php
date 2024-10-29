<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAgent extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function superagent()
    {
        return $this->belongsTo(SuperAgent::class, 'superagent_id'); 
    }
}
