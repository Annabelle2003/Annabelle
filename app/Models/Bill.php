<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'Bill';
    protected $fillable = ['reading_id','name','email','contact_number','address','customerName','status'];


    public function reading(){
        return $this->hasMany(Reading::class, 'reading_id');
}
}
