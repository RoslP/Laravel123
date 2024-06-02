<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; //Здесь явно указываем к какой таблице принадлежит модель
                                //Несмотря на то что модель создавалась с миграцией

}
