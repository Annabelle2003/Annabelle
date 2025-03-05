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
        Schema::create('reading', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admin")->onDelete("cascade");
            $table->string("customerName");
            $table->date("reading_date");
            $table->date("previous_reading");
            $table->date("current_reading");
            $table->integer("usage_use");
            $table->timestamps();
        });

        DB::table('reading')->insert([
            [
                'admin_id'=>1,
                'customerName'=>'maynn',
                'reading_date'=>'2-4-25',
                'previous_reading'=>'3-6-25',
                'current_reading'=>'3-7-25',
                'usage_use'=>5,
            ],
            [
                'admin_id'=>2,
                'customerName'=>'maynne',
                'reading_date'=>'2-5-25',
                'previous_reading'=>'3-7-25',
                'current_reading'=>'3-8-25',
                'usage_use'=>7,
            ],
            [
                'admin_id'=>3,
                'customerName'=>'maynnee',
                'reading_date'=>'2-6-25',
                'previous_reading'=>'3-8-25',
                'current_reading'=>'3-9-25',
                'usage_use'=>6,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading');


    }
};
