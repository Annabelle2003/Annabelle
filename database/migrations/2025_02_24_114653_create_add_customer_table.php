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
        Schema::create('add_customer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer_id");
            $table->foreign("customer_id")->references("id")->on("customer")->onDelete("cascade");
            $table->string("name");
            $table->string("email");
            $table->string("contact_number");
            $table->string("address");
            $table->timestamps();
        });

        DB::table('add_customer')->insert([
            [
                'customer_id'=>1,
                'name' => 'p',
                'email'=>'occ.hsjhar@gmail.com',
                'contact_number'=>'9676364',
                'address'=>'taytay'
            ],
            [
                'customer_id'=>2,
                'name' => 'pgjh',
                'email'=>'occ.hhsjhar@gmail.com',
                'contact_number'=>'96763864',
                'address'=>'taytay'
            ],
            [
                'customer_id'=>3,
                'name' => 'pgf',
                'email'=>'occ.vghsjhar@gmail.com',
                'contact_number'=>'9878676364',
                'address'=>'taytay'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_customer');

       
    }

    };
