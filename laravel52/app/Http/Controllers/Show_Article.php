<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 08/12/16
 * Time: 20:52
 */
namespace App\Http\Controllers;

use App\Article;

use App\Comment;
use Request;

use Auth;


class Show_Article extends Controller
{
    public function show_article()
    {
        $object_id  = Request::get('object_id');
        $object = Article::find($object_id);
        $Comments = Comment::where('object_id', $object_id) -> get();
        return view('Article',compact('object','Comments'));
    }

}
?>