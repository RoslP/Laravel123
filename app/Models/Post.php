<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'posts'; //Здесь явно указываем к какой таблице принадлежит модель
                                //Несмотря на то что модель создавалась с миграцией
    protected $guarded = false;    //Не нужно защищать массив данных приходящий из модели в бд.

}
