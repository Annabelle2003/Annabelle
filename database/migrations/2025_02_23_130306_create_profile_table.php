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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("name");
            $table->string("email");
            $table->string("contact_number");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->timestamps();
        });

        DB::table('profile')->insert([
            [
                'user_id'=>1,
                'name' => 'hhfd',
                'email'=>'occ.hdfjkhf@gmail.com',
                'contact_number'=>'96763864',

            ],
            [
                'user_id'=>2,
                'name' => 'hhfd',
                'email'=>'occ.hdfjkhf@gmail.com',
                'contact_number'=>'96763864',

            ],
            [
                'user_id'=>3,
                'name' => 'hhfd',
                'email'=>'occ.hdfjkhf@gmail.com',
                'contact_number'=>'96763864',

            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');

        
    }
};
