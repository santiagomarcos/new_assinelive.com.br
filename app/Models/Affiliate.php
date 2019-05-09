<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 24/04/2019
 * Time: 15:12
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $guarded = [];
    protected $table = 'affiliates';
    public $timestamps = true;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leads()
    {
        return $this->hasMany(LeadViability::class,'partner','name');
    }
}
