<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 14:35
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class WttxSuperList Extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'wttx_superlist';
    protected $guarded = [];
    public $timestamps = false;
}
