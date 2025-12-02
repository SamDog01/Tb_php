<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Earnings extends Model
{
    protected $table = 'earnings';
    protected $fillable = ['descricao', 'valor', 'data', 'user_id'];
}
