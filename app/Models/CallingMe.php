<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 29/04/2019
 * Time: 11:53
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CallingMe extends Model
{
    protected $table = 'calling_me';
    protected  $guarded =[];
    public $timestamps = true;
}