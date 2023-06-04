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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
           
           
            $table->string('name');
           
            $table->integer('purchaseprice');
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->integer('parcent');
            $table->integer('stock_amount')->default(0);
            
            $table->longText('long_description');
            $table->text('image');
          
            $table->tinyInteger('status');
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
        Schema::dropIfExists('products');
    }
};
