<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 08/12/16
 * Time: 22:25
 */
namespace App\Http\Controllers;

use App\Article;
use App\Borrow;
use Request;
use Auth;

/*use Illuminate\Support\Facades\DB;*/

class Add_Borrow extends Controller
{
    public function add_borrow()
    {
        $object_id = Request::get('object_id');
        $start_date = Request::get('start_date');
        $day = Request::get('Day');
        $month = Request::get('Month');
        $year = Request::get('Year');
        $user_id = Auth::user()->id;
        $olddate = $year."-". $month."-".$day;
        $end_date= date("Y/m/d H:i:s",strtotime($olddate));
        $start_date= date("Y/m/d H:i:s",$start_date);
        /*echo 'object_id',$object_id;
        echo 'start_date',$start_date;
        echo 'user_id',$user_id ;
        echo $day;
        echo $month;
        echo $year;*/
        $borrow = new Borrow();
        $borrow -> user_id = $user_id;
        $borrow -> object_id = $object_id;
        $borrow -> date_begin = $start_date;
        $borrow -> date_end =  $end_date;
        $borrow -> save();

        $article = Article::find($object_id);
        $article -> status = 1;
        $article -> save();
        return view('home');
    }
}
?>