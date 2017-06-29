<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 04/12/16
 * Time: 21:42
 */

namespace App;

use Illuminate\Database\Eloquent\model;

class Article extends Model
{

    protected $table = 'objects';

    protected $primaryKey = 'object_id';

}