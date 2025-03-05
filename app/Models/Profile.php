<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $fillable = ['user_id','name','email','contact_number','address'];


    public function customer(){
        return $this->belongsTo(Customer::class, 'user_id');
}
}
