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
        Schema::table('preachers', function (Blueprint $table) {
            $table->foreignId('age_group_id')->constrained();
            $table->foreignId('category_slot_id')->constrained();
        });

        Schema::table('preacher_availability', function (Blueprint $table) {
            $table->foreignId('timeslot_id')->constrained();
            $table->foreignId('preacher_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preachers', function (Blueprint $table) {
            $table->dropForeign(['age_group_id']);
            $table->dropColumn(['age_group_id']);
            $table->dropForeign(['category_slot_id']);
            $table->dropColumn(['category_slot_id']);
        });

        Schema::table('preacher_availability', function (Blueprint $table) {
            $table->dropForeign(['timeslot_id']);
            $table->dropColumn(['timeslot_id']);
            $table->dropForeign(['preacher_id']);
            $table->dropColumn(['preacher_id']);
        });
    }
};
