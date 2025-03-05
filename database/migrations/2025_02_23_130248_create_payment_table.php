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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer_id");
            $table->date("date_of_payment");
            $table->string("payment_method");
            $table->decimal("total_payment");
            $table->enum("status",["paid","unpaid"]);
            $table->foreign("customer_id")->references("id")->on("customer")->onDelete("cascade");
            $table->timestamps();
        });

        DB::table('payment')->insert([
            [
               
                'date_of_payment' => '2-4-25',
                'payment_method'=>'cash',
                'total_payment'=>200,
                'status'=>'paid',
                'customer_id'=>1,
            ],
            [
                
                'date_of_payment' => '2-4-25',
                'payment_method'=>'cash',
                'total_payment'=>200,
                'status'=>'paid',
                'customer_id'=>2,
            ],
            [
                
                'date_of_payment' => '2-4-25',
                'payment_method'=>'cash',
                'total_payment'=>200,
                'status'=>'paid',
                'customer_id'=>3,
            ],
        ]);      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');

       
    }
};
