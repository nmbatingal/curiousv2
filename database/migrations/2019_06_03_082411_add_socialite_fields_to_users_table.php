<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialiteFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            Schema::table('users', function (Blueprint $table) {
                $table->string('first_name')->nullable()->after('name');
                $table->string('middle_name')->nullable()->after('first_name');
                $table->string('last_name')->nullable()->after('middle_name');
                $table->string('provider_name')->nullable()->after('id');
                $table->string('provider_id')->nullable()->after('provider_name');
                $table->string('password')->nullable()->change();
                $table->string('avatar')->nullable();
            });
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
