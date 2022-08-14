<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //Task table has a foreign key provided by Category table (category_id)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
