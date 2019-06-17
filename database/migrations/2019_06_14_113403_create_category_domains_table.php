<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_domains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_domain');
            $table->integer('category_field_id')->unsigned();
            // $table->timestamps();

            
            $table->foreign('category_field_id')->references('id')->on('category_fields')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_domains');
    }
}
