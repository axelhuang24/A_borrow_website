<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 05/12/16
 * Time: 00:07
 */
namespace App\Http\Controllers;

use Request;

class Test extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
     {
         $this->middleware('auth');
     }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test($type)
    {

        echo $type;
    }
}