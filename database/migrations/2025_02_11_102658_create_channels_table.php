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
        if (!Schema::hasTable('channels')) {
            Schema::create('channels', function (Blueprint $table) {
                $table->uuid('id')
                    ->default(DB::raw('(UUID())'))
                    ->comment('ID');

                $table->char('title', 100)
                    ->comment('Title');

                $table->unsignedBigInteger('subscribers_count')
                    ->default(0)
                    ->comment('Total subscribers');

                $table->unsignedBigInteger('average_views')
                    ->default(0)
                    ->comment('AVG views');

                $table->float('engagement_rate', 10)
                    ->default(0.00)
                    ->comment('ER rate');

                $table->unsignedTinyInteger('category')
                    ->nullable()
                    ->comment('ID category');

                $table->unsignedTinyInteger('language')
                    ->nullable()
                    ->comment('ID language');

                $table->unsignedTinyInteger('region')
                    ->nullable()
                    ->comment('ID region');

                $table->timestamp('last_video_period')
                    ->nullable()
                    ->comment('Last video period');

                $table->timestamps();

                $table->foreign('category')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

                $table->foreign('language')
                    ->references('id')
                    ->on('languages')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

                $table->foreign('region')
                    ->references('id')
                    ->on('regions')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

                $table->comment('Channels');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
