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
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', static function (Blueprint $table) {
                $table->tinyIncrements('id')
                    ->comment('ID');

                $table->char('name', 50)
                    ->unique()
                    ->comment('Name');

                $table->char('alias', 50)
                    ->nullable()
                    ->unique()
                    ->comment('Alias');

                $table->boolean('active')
                    ->default(0)
                    ->comment('Is active?');

                $table->timestamps();

                $table->comment('Categories of contents');
            });
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
