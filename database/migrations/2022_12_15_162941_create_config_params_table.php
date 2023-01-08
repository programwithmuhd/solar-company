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
        Schema::create('config_params', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')
                ->references('id')
                ->on('products')->onDelete('cascade');

            $table->foreignId('configuration_id')
            ->references('id')
                ->on('configurations');
                
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
        Schema::dropIfExists('config_params');
    }
};
