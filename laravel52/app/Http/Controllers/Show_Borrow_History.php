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


class Show_Borrow_History extends Controller
{
    public function show_borrow_history()
    {
        $user_id = Auth::user()->id;
        $Borrows = DB::table('borrows')
            ->join('objects', 'borrows.object_id', '=', 'objects.object_id')
            ->where('user_id', $user_id)
            ->get();
       /* dd($Borrows);*/
        return view('Borrow_History',compact('Borrows'));
    }

}
?>