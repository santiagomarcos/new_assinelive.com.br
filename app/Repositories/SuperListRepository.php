<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 14:04
 */

namespace App\Repositories;


use App\Models\NewSuperList;
use App\Models\SuperList;

class SuperListRepository
{
    /**
     * @return SuperList
     */
    public function getModel()
    {
        return (new SuperList());
    }

    public function findByZip($zip)
    {
        return $this->getModel()
            ->where('CEP', $zip)
            ->first();
    }

    /**
     * @param $zip
     * @param $number
     * @return mixed
     */
    public function findByZipAndNumber($zip, $number)
    {
        return $this->getModel()
            ->where('CEP', $zip)
            ->where('NUM', $number)
            ->first();
    }


}
