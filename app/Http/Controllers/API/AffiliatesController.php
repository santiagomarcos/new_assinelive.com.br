<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 06/05/2019
 * Time: 11:33
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Repositories\AffiliatesRepository;
use Illuminate\Http\Request;

class AffiliatesController extends Controller
{
    /**
     * @param Request $request
     * @param AffiliatesRepository $affiliatesRepository
     * @return array
     */
    public function getAffiliateReferrer(Request $request, AffiliatesRepository $affiliatesRepository)
    {
        $args = $request->all();
        $code = $affiliatesRepository->findByAffiliate($args['referrer']);
        return $status = [
            'success' => true,
            'contain' => ($code) ? true:false
        ];
    }

    /**
     * @param Request $request
     * @param AffiliatesRepository $affiliatesRepository
     * @return array
     */
    public function createAffiliate(Request $request, AffiliatesRepository $affiliatesRepository)
    {
        $args = $request->all();
        $affiliate = $affiliatesRepository->create([
            'name' => strtoupper($args['name']),
            'email' => $args['email'],
            'phone' => $args['phone'],
            'code' => $args['code'],
            'active' => 1
        ]);

        return [
            'success' => ($affiliate) ? true:false,
        ];
    }

}
