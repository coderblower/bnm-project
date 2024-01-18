<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class single_entity_vouture extends Model
{
    use HasFactory;
    protected $fillable = ['particular', 'amount','single_vouture_id'];
}
