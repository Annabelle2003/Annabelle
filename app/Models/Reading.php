<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;
    protected $table = 'reading';
    protected $fillable = ['admin_id','customerName','reading_date','previous_reading','current_reading','usage_use'];


    public function admin(){
        return $this->hasMany(Admin::class, 'admin_id');
    
}
}