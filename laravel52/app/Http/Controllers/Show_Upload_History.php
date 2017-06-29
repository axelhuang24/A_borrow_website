<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 10/12/16
 * Time: 22:12
 */
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;

use Auth;


class Show_Upload_History extends Controller
{
    public function show_upload_history()
    {
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