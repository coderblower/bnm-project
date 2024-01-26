<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\vouture_single;
use Illuminate\Database\Eloquent\Relations\HasMany;

class vouture extends Model
{
    use HasFactory;

    protected $fillable = ['id','title'];

    public function vouture_single(): HasMany
    {
        return $this->hasMany(vouture_single::class, 'voutuer_id', 'id');
    }

    public function amount(){

            $totalAmount = 0;  
            foreach ($this->vouture_single as $single) {
                $totalAmount += $single->single_entity_vouture->sum('amount');
            }
            return $totalAmount;
    }

    public function vouture_no(){
        $result = $this->id > 9? '0': '00';
        return $result.$this->id;
    }
}
