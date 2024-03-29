<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\single_entity_vouture;
use Illuminate\Database\Eloquent\Relations\HasMany;

class vouture_single extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','voutuer_id', 'vouture_no'];

    protected $primaryKey = 'reference_id';


    function single_entity_vouture(): HasMany
    {
        return $this->hasMany(single_entity_vouture::class, 'single_vouture_id', 'reference_id');
    }

    public function amount(){
        return 0;
    }
}
