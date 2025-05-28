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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('details');
            $table->string('cover_image');
            $table->json('images');       // JSON column for images
            $table->json('used_techs');   // JSON column for used technologies
            $table->timestamps();
        });

        DB::table('projects')->insert([
            // Project 1
            [
                'name' => 'My First Project',
                'description' => 'Default description',
                'details' => 'Default details',
                'cover_image' => 'https://placehold.co/300',
                'images' => json_encode(['https://placehold.co/100', 'https://placehold.co/200', 'https://placehold.co/300', 'https://placehold.co/400']),
                'used_techs' => json_encode(['Laravel', 'SQLite']),
            ],
            // Project 2
            [
                'name' => 'My Second Project',
                'description' => 'Default description',
                'details' => 'Default details',
                'cover_image' => 'https://placehold.co/300',
                'images' => json_encode(['https://placehold.co/300', 'https://placehold.co/300', 'https://placehold.co/300', 'https://placehold.co/300']),
                'used_techs' => json_encode(['Laravel', 'SQLite']),
            ],
            // Project 3
            [
                'name' => 'My Third Project',
                'description' => 'Default description',
                'details' => 'Default details',
                'cover_image' => 'https://placehold.co/300',
                'images' => json_encode(['https://placehold.co/300', 'https://placehold.co/300', 'https://placehold.co/300', 'https://placehold.co/300']),
                'used_techs' => json_encode(['Laravel', 'SQLite']),
            ],
            // Project 4
            [
                'name' => 'My Fourth Project',
                'description' => 'Default description',
                'details' => 'Default details',
                'cover_image' => 'https://placehold.co/300',
                'images' => json_encode(['https://placehold.co/300', 'https://placehold.co/300', 'https://placehold.co/300', 'https://placehold.co/300']),
                'used_techs' => json_encode(['Laravel', 'SQLite']),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
