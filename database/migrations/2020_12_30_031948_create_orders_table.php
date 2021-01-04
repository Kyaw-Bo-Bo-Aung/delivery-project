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
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->integer('qty');
            $table->string('pick_up_place');
            $table->string('drop_off_place');
            $table->date('pick_up_date');
            $table->time('pick_up_time');
            $table->string('product_value')->nullable();
            $table->string('status')->nullable();
             $table->text('note')->nullable();
            $table->unsignedBigInteger('product_type_id');
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
            $table->unsignedBigInteger('packaging_type_id');
            $table->foreign('packaging_type_id')->references('id')->on('packaging_types')->onDelete('cascade');
            $table->unsignedBigInteger('weight_id');
            $table->foreign('weight_id')->references('id')->on('weights')->onDelete('cascade');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
