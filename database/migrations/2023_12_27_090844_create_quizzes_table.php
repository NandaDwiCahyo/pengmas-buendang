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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string("identitas_responden")->nullable();
            $table->string("jenis_kelamin");
            $table->integer("usia");
            $table->string("instansi");
            $table->string("pekerjaan");
            $table->float("waktu_akses");
            $table->float("konsumsi_paket");
            $table->float("hasil");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
