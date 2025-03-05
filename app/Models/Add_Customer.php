<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Customer extends Model
{
    use HasFactory;

    protected $table = 'Add_Customer';
    protected $fillable = ['customer_id','name','email','contact_number','address','customerName','status'];


    public function customer(){
        return $this->hasMany(Customer::class, 'customer_id');
}
}
