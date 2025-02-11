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
        if (!Schema::hasTable('regions')) {
            Schema::create('regions', static function (Blueprint $table) {
                $table->tinyIncrements('id')
                    ->comment('ID');

                $table->char('name', 50)
                    ->unique()
                    ->comment('Name');

                $table->char('code', 2)
                    ->unique()
                    ->comment('ISO 3166-1 (alpha-2)');

                $table->timestamps();

                $table->comment('Regions');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
