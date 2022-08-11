<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->longText('slug');
            $table->decimal('price',18,4)->unsigned();
            $table->decimal('special_price',18,4)->unsigned()->nullable();
            $table->string('special_price_type');
            $table->date('special_price_start');
            $table->date('special_price_end');
            $table->decimal('selling_price',18,4)->unsigned()->nullable();
            $table->string('sku');
            $table->boolean('manage_stock');
            $table->integer('qty');
            $table->boolean('in_stock');
            $table->integer('viewed')->unsigned()->default(0);
            $table->boolean('is_active');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->softDeletes();
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
}
