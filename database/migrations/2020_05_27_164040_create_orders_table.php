<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('order_id');
            $table->text('instruction');
            $table->string('level');
            $table->string('clipping');
            $table->string('masking');
            $table->string('shadow');
            $table->string('montage');
            $table->string('resize');
            $table->string('return_format');
            $table->string('comments');
            $table->string('images');
            $table->string('reference_images');
            $table->string('status',10)->default('pending');
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
        Schema::dropIfExists('orders');
    }
}
