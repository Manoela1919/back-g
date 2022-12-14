<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class links extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_redirect', 'limit', 'click', 'link'];
}
