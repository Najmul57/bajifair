<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAgent extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function masterAgents()
    {
        return $this->hasMany(MasterAgent::class, 'superagent_id');
    }
}
