<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('10sys_rec__users', function (Blueprint $table) {
            $table->increments('rec_id');
            $table->string('username', 64)->unique();
            $table->string('password');
            $table->string('realname', 120);

            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('rec_id')->on('10sys_rec__roles');

            $table->unsignedtinyInteger('status')->default(1);
            $table->unsignedtinyInteger('is_online')->default(0);
            $table->unsignedtinyInteger('try_login')->default(0);
            $table->timestamp('last_login_timestamp')->nullable();
            $table->string('last_login_ip', 20)->nullable();
            $table->timestamp('last_logout_timestamp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('10sys_rec__users');
    }
};
