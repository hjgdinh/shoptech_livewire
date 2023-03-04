<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $table = 'variants';
    protected $primaryKey = 'id';

    public $timestamps = true;
    //protected $dateFormat = 'd-m-Y';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
