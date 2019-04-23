<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 12:42
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SuperList extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'new_superlist';
    protected $guarded = [];
    public $timestamps = false;
}
