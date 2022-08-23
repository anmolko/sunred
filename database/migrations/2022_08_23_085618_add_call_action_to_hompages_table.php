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
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('action_heading')->after('direction_container_color')->nullable();
            $table->string('action_button')->after('direction_container_color')->nullable();
            $table->string('action_link')->after('direction_container_color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homepages', function (Blueprint $table) {
            $table->dropColumn('action_heading');
            $table->dropColumn('action_button');
            $table->dropColumn('action_link');
        });
    }
};
