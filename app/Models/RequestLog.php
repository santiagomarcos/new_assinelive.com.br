<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 24/04/2019
 * Time: 17:57
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class RequestLog extends Model
{
    protected $guarded = [];
    protected $table = 'request_logger';
}
