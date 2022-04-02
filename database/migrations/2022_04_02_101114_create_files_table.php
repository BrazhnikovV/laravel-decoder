<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('files', static function (Blueprint $table) {
            $table->id()->autoIncrement()->unsigned();
            $table->string('name', 255)
                ->nullable(false)
                ->comment('Название файла');
            $table->string('path', 255)
                ->nullable(false)
                ->comment('Путь к файлу');
            $table->integer('user_id')
                ->unsigned()
                ->nullable(false)
                ->comment('Идентификатор пользователя');
            $table->timestamps();

            $table->index(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
