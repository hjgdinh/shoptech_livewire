<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;

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


    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->price;
    }
    public function getBuyableWeight($options = null) {
        return $this->weight;
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function variant()
    {
        return $this->hasMany(Variant::class);
    }
}
