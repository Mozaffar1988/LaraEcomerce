<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\Catgory;
class Catgory extends Model
{
    //use HasFactory;
    
    
    public function parent()
    {
        return $this->belongsTo(Catgory::class, 'parent_id');
    }
    
}
