<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'users';
    protected $primaryKey = 'id';    
    public $timestamps = true;
    //protected $dateFormat = 'h:m:s';
    protected $fillable = ['id','name', 'gender', 'phone','address','email','password','utype','avatar'];

    // public function role() {
    //     return $this->belongsTo(Role::class);
    // }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'avatar_url',
    ];

    public function avatarUrl() {
        // return $this->avatar ? url('images/' . json_decode($this->avatar)[0]) : url('images/deflaut_avatar.png');
        return $this->avatar ? url('images/' . $this->avatar) : url('images/deflaut/deflaut_avatar.png');
    }
   
    public function getAvatarUrlAttribute() {
        if($this->avatar) {
            return url('images/' . $this->avatar);
        }
        return url('images/deflaut/deflaut_avatar.png');
    }
}
