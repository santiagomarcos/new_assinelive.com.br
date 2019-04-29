<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 29/04/2019
 * Time: 12:42
 */

namespace App\Repositories;


use App\Models\LeadViability;
use Illuminate\Database\Eloquent\Model;

class LeadsViabilityRepository extends Repository
{
    /**
     * @return LeadViability|Model
     */
    public function getModel()
    {
        return (new LeadViability());
    }


}
