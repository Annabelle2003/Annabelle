<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    if (!Schema::hasTable('customer')) {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('customerName');
            $table->enum('status', ['paid', 'unpaid']);
            $table->timestamps();
        });

        DB::table('customer')->insert([
            [
                'name' => 'my',
                'email'=>'occ.pbr@gmail.com',
                'phone'=>'12345',
                'address'=>'opol',
                'customerName'=>'ann',
                'status'=>'paid',
            ],
            [
                'name' => 'mym',
                'email'=>'occ.pbra@gmail.com',
                'phone'=>'123456',
                'address'=>'opol',
                'customerName'=>'yann',
                'status'=>'paid',
            ],
            [
                'name' => 'myma',
                'email'=>'occ.pobra@gmail.com',
                'phone'=>'1234567',
                'address'=>'opol',
                'customerName'=>'myann',
                'status'=>'paid',
            ],
        ]);
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');

        
    }

    };
