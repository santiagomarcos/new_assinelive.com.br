<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 02/05/2019
 * Time: 11:10
 */

namespace App\Repositories;

use App\Models\User;

class UsersRepository extends Repository
{
    /**
     * @return User|\Illuminate\Database\Eloquent\Model
     */
    public function getModel()
    {
        return (new User());
    }


    /**
     * @param $user
     * @param $password
     * @return mixed
     */
    public function findByUserAndPassword($user, $password)
    {
        return $this->getModel()
            ->where('login', $user)
            ->where('password', md5($password))
            ->where('active', 1)
            ->get();
    }

}
