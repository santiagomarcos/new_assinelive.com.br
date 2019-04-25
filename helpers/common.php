<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 24/04/2019
 * Time: 16:19
 */
if( !function_exists('getPartner')) {
    /**
     * @param null $partner
     * @return mixed
     */
    function getPartner($partner = null)
    {
        $repository = (new \App\Repositories\AffiliatesRepository());
        $affiliate = $repository->findByAffiliate($partner);
        $session = (session('partner') == null) ? session(['partner' => ($affiliate) ? $affiliate:$repository->find(1)]) : session('partner') ;
        return $session;
    }
}
