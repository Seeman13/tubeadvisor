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
        if (!Schema::hasTable('languages')) {
            Schema::create('languages', static function (Blueprint $table) {
                $table->tinyIncrements('id')
                    ->comment('ID');

                $table->char('name', 50)
                    ->unique()
                    ->comment('Name');

                $table->char('code', 2)
                    ->unique()
                    ->comment('ISO 639-1');

                $table->boolean('active')
                    ->default(0)
                    ->comment('Is active?');

                $table->timestamps();

                $table->comment('Languages');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
