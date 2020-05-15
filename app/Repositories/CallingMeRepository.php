<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 29/04/2019
 * Time: 11:57
 */

namespace App\Repositories;


use App\Models\CallingMe;

class CallingMeRepository extends Repository
{
    /**
     * @return CallingMe
     */
    public function getModel()
    {
        return(new CallingMe());
    }

    public function findAllOrder()
    {
        return $this->getModel()->orderBy('id','desc')->paginate(10);
    }
}
