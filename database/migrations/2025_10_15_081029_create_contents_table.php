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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('constellation');
            $table->tinyText('description');
            $table->string('type');
//            $table->string('image_url');
            $table->string('country');
            $table->string('city');
            $table->string('town');
            $table->string('province');
            $table->date('date');
            $table->unsignedInteger('views')->default(0);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('tag_id')->nullable()->constrained();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
