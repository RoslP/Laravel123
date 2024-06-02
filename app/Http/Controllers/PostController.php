<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(): string
    {
        $post = Post::find(1);
        return dump($post);
    }

    public function create(): void
    {
        $postsArray =
            [[
                'title' => 'This is title',
                'content' => 'some content',
                'image' => 'image123.jpg',
                'likes' => 30,
                'is_published' => 1
            ],
                [
                    'title' => 'This is title 2',
                    'content' => 'some content 2',
                    'image' => 'image12233.jpg',
                    'likes' => 40,
                    'is_published' => 1
                ]
            ];
        foreach ($postsArray as $post) {
            dump($post);
            Post::create($post); //Через ELOQUENT ORM. В ДАННОМ СЛУЧАЕ create это НЕ ТЕКУЩИЙ метод это метод который насдедуется где-то далеко.
        }
        dump('created');
    }
    public function update(): void
    {
        $post=Post::find(5);
        $post->update(['title' => 'This is updated title']); //Слева название колонки. Српава значение.
    }
    public function delete(): void
    {
        $post=Post::find(2);
        $post->delete();
        dump('deleted');

    }
}
