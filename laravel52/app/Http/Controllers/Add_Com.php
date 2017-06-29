<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 11/12/16
 * Time: 17:48
 */
namespace App\Http\Controllers;

use App\Article;
use App\Borrow;
use App\Comment;
use Request;
use Auth;

/*use Illuminate\Support\Facades\DB;*/

class Add_Com extends Controller
{
    public function add_com()
    {
        $object_id = Request::get('object_id');
        $com = Request::get('com');
        $degree = Request::get('degree');
        $user_id = Auth::user()->id;
        echo 'com',$com;
        echo 'user_id',$user_id;
        echo 'degree',$degree;

        $comment= new Comment();
        $comment -> user_id = $user_id;
        $comment -> object_id = $object_id;
        $comment -> com = $com;
        $comment -> degree =  $degree;
        $comment -> save();

        $object = Article::find($object_id);
        $Comments = Comment::where('object_id', $object_id) -> get();
        return view('Article',compact('object','Comments'));
    }
}
?>