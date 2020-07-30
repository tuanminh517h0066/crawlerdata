<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            
            $table->integer('price');
            
            $table->string('thumbnail');
            $table->string('next_page');
            $table->integer('header_id')->unsigned();
            $table->foreign('header_id')
                  ->references('id_header')
                  ->on('header')
                  ->onDelete('cascade'); #xoa danh muc thi moi san pham se bi xoa het


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
        Schema::dropIfExists('product');
    }
}
