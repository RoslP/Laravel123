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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');     #Указываем что в бд колока title имеет тип sting. string=256 симловов от 0 дл 255
            $table->text('content');    #Максимальная длина у text не ограничена в отличии от string
            $table->string('image')->nullable();    #Допустим храним url на фото. nullable - означает, что столбец может содержать null
            $table->unsignedBigInteger('likes')->nullable();    #Храним кол-во лайков. unsigned - означает, что число будет положительным
            $table->boolean('is_published')->default(1);    #по умолчанию 0 - посты не опубликованы
            $table->timestamps();

            $table->softDeletes(); //Создает таблицу где будут храниться все удаленные данные. Нужно в модели использовать use SoftDeletes;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
