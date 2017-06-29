<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 04/12/16
 * Time: 21:26
 */
namespace App\Http\Controllers;

use App\Article;
use Request;

use Auth;

/*use Illuminate\Support\Facades\DB;*/

class Add_Article extends Controller
{
    public function add_article()
    {
        $object_name = Request::get('object_name');
        $object_titre = Request::get('object_titre');
        $type = Request::get('type');
        $description = Request::get('description');
        $user_id = Auth::user()->id;

        $object = new Article();
        $object -> name = $object_name;
        $object -> titre = $object_titre;
        $object -> type = $type;
        $object -> description = $description;
        $object -> owner_id = $user_id;
        $object -> status = 0;
        $object -> save();
        return view('home');
    }
}
?>