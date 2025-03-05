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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("password");
            $table->timestamps();
        });

        DB::table('admin')->insert([
            [
                'username'=>'may',
                'password' => Hash::make("password")
            ],
            [
                'username'=>'ann',
                'password' => Hash::make("password")
            ],
            [
                'username'=>'poba',
                'password' => Hash::make("password")
            ],
        ]);
        }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
