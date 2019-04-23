<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 14:35
 */

namespace App\Repositories;


use App\Models\WttxSuperList;
use Illuminate\Database\Eloquent\Model;

class WttxSuperListRepository extends Repository
{
    public function getModel()
    {
        return (new WttxSuperList());
    }

    /**
     * @param $zip
     * @return mixed
     */
    public function searchByZip($zip)
    {
        return $this->getModel()
            ->where('CEP', $zip)
            ->first();
    }


}
