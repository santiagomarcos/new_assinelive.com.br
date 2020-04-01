<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 02/05/2019
 * Time: 17:39
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repositories\AffiliatesRepository;
use App\Repositories\LeadsViabilityRepository;
use App\Repositories\RequestLoggerRepository;

class PagesController extends Controller
{

    /**
     * @param AffiliatesRepository $affiliatesRepository
     * @param RequestLoggerRepository $loggerRepository
     * @param LeadsViabilityRepository $viabilityRepository
     * @return mixed
     */
    public function dashboard(AffiliatesRepository $affiliatesRepository,
                              RequestLoggerRepository $loggerRepository,
                              LeadsViabilityRepository $viabilityRepository)
    {
        return view('pages.admin.pages.home')
            ->withAffiliates($affiliatesRepository->activeAffiliates())
            ->withLeads($viabilityRepository->findByDay())
            ->withAccess($loggerRepository->findByDay())
            ->withReports($viabilityRepository->findAllOrder())
            ->withConversion($viabilityRepository->findByDayConversion());
    }

}
