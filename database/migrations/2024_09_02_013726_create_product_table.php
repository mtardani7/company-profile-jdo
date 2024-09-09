<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('merek');
            $table->string('foto');
            $table->string('keunggulan');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
