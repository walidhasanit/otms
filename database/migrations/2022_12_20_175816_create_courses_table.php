<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('teacher_id');
            $table->string('title');
            $table->string('objective');
            $table->integer('fee');
            $table->text('starting_date');
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->integer('hit_count')->default(0);
            $table->tinyInteger('offer_status')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
