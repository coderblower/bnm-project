<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\vouture_single;
use Illuminate\Database\Eloquent\Relations\HasMany;

class vouture extends Model
{
    use HasFactory;

    protected $fillable = ['id'];

    public function vouture_single(): HasMany
    {
        return $this->hasMany(vouture_single::class, 'voutuer_id', 'id');
    }

    public function showcustomtxt(){

        if($this->id == 1){
            $arr = [];
            foreach ($this->vouture_single as $single) {
                array_push($arr, $single->single_entity_vouture);
            }
            return $arr;
        };
        return [];
    }
}