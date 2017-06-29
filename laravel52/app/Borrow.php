<?php
/**
 * Created by PhpStorm.
 * User: cool
 * Date: 04/12/16
 * Time: 22:45
 */
namespace App;

use Illuminate\Database\Eloquent\model;

class Borrow extends Model
{

    protected $table = 'borrows';

    protected $primaryKey = 'borrow_id';

}