<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id'; 
    protected $fillable = ['name','parent_id'];    
    public $timestamps = true;

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('children');
    }

    public function child() {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function products()
    {
        return $this->hasManyOfDescendantsAndSelf(Product::class);
    }
    
}


