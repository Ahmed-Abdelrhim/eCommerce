<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();


            $table->unique(['product_id','category_id']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
//product category many to many product can be exists in many categories and the category has many products
//so the relation will be many to many
//so we need a bridge table to define this relation
//so here we created the product_categories table which has an id which is primary key
//and product_id is the foreign key for products table
//and category_id which is the foreign key for categories table
//and finally the product_id and category_id columns are unique together
//which means the product can not be exists in the same category twice but can exist in many categories at the same time
//while the same category includes as many as products
