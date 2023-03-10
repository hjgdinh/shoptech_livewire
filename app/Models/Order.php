<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';   
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orderItem() {
        return $this->hasMany(OrderItem::class);
    }
}
