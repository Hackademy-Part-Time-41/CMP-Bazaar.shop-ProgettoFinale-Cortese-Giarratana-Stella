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
        $categories = [
            'elettronica',
            'abbigliamento',
            'salute e bellezza',
            'casa e giardinaggio',
            'giocattoli',
            'sport',
            'animali domestici',
            'libri e riviste',
            'accessori',
            'motori'
        ];

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        foreach ($categories as $category) {
            Category::create([
                'name'=> $category
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
