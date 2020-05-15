<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 09/05/2019
 * Time: 13:01
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repositories\CallingMeRepository;
use App\Repositories\LeadsViabilityRepository;

class ConsultsController extends Controller
{
    /**
     * @param LeadsViabilityRepository $viabilityRepository
     * @return mixed
     */
    public function all(LeadsViabilityRepository $viabilityRepository)
    {
        return view('pages.admin.consults.viability')
            ->withReports($viabilityRepository->findAllOrderTable());
    }

    /**
     * @param CallingMeRepository $repository
     * @return mixed
     */
    public function callingMe(CallingMeRepository $repository)
    {
        return view('pages.admin.consults.callingme')
            ->withReports($repository->findAllOrder());
    }

}
