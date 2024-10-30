<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subadmins()
    {
        return $this->hasMany(Subadmin::class);
    }

    public function superagents()
    {
        return $this->hasMany(SuperAgent::class);
    }
}
