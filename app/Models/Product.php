<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //class name and table name may be different !
    protected $table = 'products';
    protected $primaryKey = 'id';
    
    protected $casts = [
        'image' => 'array',
    ];

    public $timestamps = true;
    //protected $dateFormat = 'd-m-Y';
    protected $fillable = ['name', 'price', 'image', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
