<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function group(){
        $this->belongsTo(Group::class);
    }

    protected $fillable = ['description', 'apresentation', 'feature', 'group', 'classification', 'category', 'manufacturer'];

    public function search($filter = null){
        $results = $this->where('description', 'LIKE', "%{$filter}%")
                        ->orWhere('apresentation', 'LIKE', "%{$filter}%")
                        ->paginate();
    return $results;

    }
}
