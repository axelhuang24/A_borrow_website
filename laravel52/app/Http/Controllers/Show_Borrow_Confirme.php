<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 08/12/16
 * Time: 22:16
 */
namespace App\Http\Controllers;

use App\Article;
use Request;

use Auth;


class Show_Borrow_Confirme extends Controller
{
    public function show_borrow_confirme()
    {
        $object_id  = Request::get('object_id');
        $object = Article::find($object_id);
        return view('Borrow_confirmer',compact('object'));
    }

}
?>