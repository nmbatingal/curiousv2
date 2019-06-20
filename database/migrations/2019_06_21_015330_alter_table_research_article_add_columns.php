<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableResearchArticleAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('research_articles', function (Blueprint $table) {
            $table->integer('uploader_id')->unsigned()->nullable();
            $table->string('filepath')->nullable();

            $table->foreign('uploader_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('research_articles', function (Blueprint $table) {
            $table->dropColumn(['uploader_id', 'filepath']);
        });
    }
}
