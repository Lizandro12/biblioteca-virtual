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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('publishing_company')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('isbn')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('language')->nullable();
            $table->integer('numb_page')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('availability')->default(true);
            $table->string('contry_code')->nullable();
            $table->integer('edition')->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
