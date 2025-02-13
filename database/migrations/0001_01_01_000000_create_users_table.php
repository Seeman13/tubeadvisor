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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');

            $table->char('name', 20)
                ->nullable()
                ->unique()
                ->comment('Login');

            $table->char('email', 100)
                ->unique()
                ->comment('Email');

            $table->timestamp('email_verified_at')
                ->nullable()
                ->comment('Account activation time');

            $table->string('password');

            $table->rememberToken()
                ->comment('Remember token');

            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->char('email', 100)
                ->primary()
                ->comment('Email');

            $table->string('token');

            $table->timestamp('created_at')
                ->nullable()
                ->comment('Created at');
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary()->comment('ID');

            $table->foreignId('user_id')
                ->nullable()
                ->index();

            $table->string('ip_address', 45)
                ->nullable()
                ->comment('IP address');

            $table->text('user_agent')->nullable();

            $table->longText('payload');

            $table->integer('last_activity')
                ->index()
                ->comment('Last activity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
