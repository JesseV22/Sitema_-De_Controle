<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProviderAndProviderIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adiciona os campos provider e provider_id
            $table->string('provider')->nullable()->after('email');
            $table->string('provider_id')->nullable()->unique()->after('provider');
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
            // Remove os campos provider e provider_id
            $table->dropColumn(['provider', 'provider_id']);
        });
    }
}
