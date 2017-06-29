<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 11/12/16
 * Time: 16:53
 */
namespace App;

use Illuminate\Database\Eloquent\model;

class Comment extends Model
{

    protected $table = 'comments';

    protected $primaryKey = 'comment_id';

}