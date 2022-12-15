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
        Schema::create('right_roles', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->boolean('admin_right_role');
            $table->boolean('manager_right_role');
            $table->boolean('user_right_role');
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
        Schema::dropIfExists('right_roles');
    }
};
