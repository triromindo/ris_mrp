<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('10sys_rec__roles', function (Blueprint $table) {
            $table->increments('rec_id');
            $table->string('name', 32);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('10sys_rec__roles');
    }
};
