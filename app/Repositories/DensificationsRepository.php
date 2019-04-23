<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 14:57
 */

namespace App\Repositories;


use App\Models\Densification;
use Illuminate\Database\Eloquent\Model;

class DensificationsRepository extends Repository
{
    /**
     * @return Densification|Model
     */
    public function getModel()
    {
        return (new Densification());
    }

    /**
     * @param $msan
     * @return mixed
     */
    public function findByMsan($msan)
    {
        return $this->getModel()
            ->where('MSAN_OLT', $msan)
            ->get()
            ->first();
    }


}
