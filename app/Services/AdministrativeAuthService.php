<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdministrativeAuthService
{
    /**
     * @var UsersRepository
     */
    private $repository;

    /**
     * AdministrativeAuthService constructor.
     */
    public function __construct()
    {
        $this->repository = new UsersRepository();
    }

    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function attempt($username, $password)
    {
        $find = $this->repository->findByUserAndPassword($username, $password);

        if (!$find->count())
            return false;

        return $this->authenticateWithModel($find->first());
    }

    /**
     * @param User $user
     * @return bool
     */
    public function authenticateWithModel(User $user)
    {
        \session(['useradmin' => $user]);
        return true;
    }

    /**
     * @return bool
     */
    public function deauthenticate()
    {
        Session::forget('user-admin');
        return true;
    }


}
