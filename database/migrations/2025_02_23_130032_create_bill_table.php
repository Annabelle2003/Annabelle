<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("reading_id");
            $table->foreign("reading_id")->references("id")->on("reading")->onDelete("cascade");
            $table->string("name");
   $table->string("email");
   $table->string("phone");
   $table->string("address");
   $table->string("customerName");
   $table->enum("status",["single","merried"]);
   $table->timestamps();
        });

        DB::table('bill')->insert([
            [
                'reading_id'=>1,
                'name' => 'myn',
                'email'=>'occ.pabr@gmail.com',
                'phone'=>'123456',
                'address'=>'opol',
                'customerName'=>'antgn',
                'status'=>'single',
            ],
            [
                'reading_id'=>2,
                'name' => 'mynfs',
                'email'=>'occ.padfbr@gmail.com',
                'phone'=>'12345653',
                'address'=>'opol',
                'customerName'=>'anefdtgn',
                'status'=>'merried',
            ],
            [
                'reading_id'=>3,
                'name' => 'mynfd',
                'email'=>'occ.pafdfbr@gmail.com',
                'phone'=>'12345667',
                'address'=>'opol',
                'customerName'=>'fdantgn',
                'status'=>'single',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');

        
    }
};
