<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_articles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('publication_title')->nullable();
            $table->text('authors')->nullable();
            $table->longtext('research_content');
            $table->text('keywords')->nullable();
            $table->integer('category_field_id')->unsigned()->nullable();
            $table->integer('category_domain_id')->unsigned()->nullable();
            $table->integer('category_subdomain_id')->unsigned()->nullable();
            $table->date('project_duration_start')->nullable();
            $table->date('project_duration_end')->nullable();
            $table->string('funding_agency')->nullable();
            $table->string('project_cost')->nullable();
            $table->string('project_location')->nullable();
            $table->string('location_latitude')->nullable();
            $table->string('location_longitude')->nullable();
            $table->string('filename')->nullable();
            $table->integer('filesize')->nullable();
            $table->boolean('access_type')->default(0);
            $table->boolean('status')->default(0);
            // $table->uuid('log_id')->index()->nullable();
            $table->timestamps();

            $table->foreign('category_field_id')->references('id')->on('category_fields')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('category_domain_id')->references('id')->on('category_domains')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('category_subdomain_id')->references('id')->on('category_subdomains')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_articles');
    }
}
