<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
    protected $fillable = ['user_id', 'name', 'type'];

    public function earnings() {
        return $this->hasMany(Earnings::class);
    }

    public function expenses() {
        return $this->hasMany(Expenses::class);
    }
}
