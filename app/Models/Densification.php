<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 14:57
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Densification extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'densification';
    protected $guarded = [];
    public $timestamps = false;

}
