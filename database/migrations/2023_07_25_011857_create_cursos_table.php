<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hotmart')->default(0);
            $table->boolean('ad_status')->default(false);
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('vsl');
            $table->string('author');
            $table->date('date')->default(date('2023-7-25'));
            $table->float('rating')->default(5);
            $table->enum('category', ['danzas y bailes', 'música']);
            $table->enum('format', ['video curso', 'ebook', 'en persona']);
            $table->enum('subscription', ['pago unico', 'por año', 'por mes']);
            $table->set('language', ['Español', 'English'])->default('Español');
            $table->float('comission', 4, 2)->default(0);
            $table->decimal('cashback', 5, 2)->default(0);
            $table->decimal('price', 6, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
