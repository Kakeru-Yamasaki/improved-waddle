<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる.
//この場合Illuminate\Http内のRequest、App\Models内のPostクラスをインポートしている
use Illuminate\Http\Request;
use App\Models\Post;
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$Postとして使用
    {
        return $post->get();//$postの中身を戻り値にする
    }
}
