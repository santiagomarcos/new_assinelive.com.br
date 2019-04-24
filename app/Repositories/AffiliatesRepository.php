<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 24/04/2019
 * Time: 15:13
 */

namespace App\Repositories;


use App\Models\Affiliate;
use Illuminate\Database\Eloquent\Model;

class AffiliatesRepository extends Repository
{
    /**
     * @return Affiliate|Model
     */
    public function getModel()
    {
        return (new Affiliate());
    }

    /**
     * @param $partner
     * @return mixed
     */
    public function findByAffiliate($partner)
    {
        return $this->getModel()
            ->where('code', $partner)
            ->get();
    }


}
