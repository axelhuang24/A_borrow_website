<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 11/12/16
 * Time: 00:06
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Article;
use Request;

use Auth;


class Delete extends Controller
{
    public function delete()
    {
        $object_id  = Request::get('object_id');
        $object = Article::find($object_id);
        $object -> delete();
        $user_id = Auth::user()->id;
        $Articles = DB::table('users')
            ->join('objects', 'users.id', '=', 'objects.owner_id')
            ->where('id', $user_id)
            ->get();
        /* dd($Borrows);*/
        return view('My_History',compact('Articles'));
    }

}
?>