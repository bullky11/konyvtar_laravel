<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\Bool_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author',32);
            $table->longText('title',150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });
        Book::create([
            'author' => "Kiss Béla",
            'title' => "a kecske",
        ]);
        Book::create([
            'author' => "Nagy Andris",
            'title' => "a kutya",
        ]);
        Book::create([
            'author' => "Arany Etelka",
            'title' => "ez s az is",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
