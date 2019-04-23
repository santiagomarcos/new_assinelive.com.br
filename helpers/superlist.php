<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 14:24
 */


if(! function_exists('searchSuperList')){
    /**
     * @param $zip
     * @param $number
     * @return mixed
     */
    function searchSuperList($zip,$number)
    {
        return \Cache::remember('superlist-'.$zip.$number, 2160, function() use($zip, $number){
            $consult = (new \App\Repositories\SuperListRepository())->findByZipAndNumber($zip,$number);
            return $consult;
        });
    }
}
if(! function_exists('searchWttxSuperList')){
    /**
     * @param $zip
     * @param $number
     * @return mixed
     */
    function searchWttxSuperList($zip)
    {
        return \Cache::remember('superlistwttx-'.$zip, 43200, function() use($zip){
            $consult = (new \App\Repositories\WttxSuperListRepository())->searchByZip($zip);
            return $consult;
        });
    }
}
if(! function_exists('treatOffer')){
    /**
     * @param $offer
     * @return array
     */
    function treatOffer($offer)
    {
        $var1 = explode('|', $offer);
        $plan =[];
        foreach($var1 as $value) {
            $values = explode('=',$value);
            $plan['PLAN'.$values[0]] = $values[1];
        }
        return $plan;
    }
}
if(! function_exists('densification')){
    /**
     * @param $msan
     * @param $olt
     * @return string
     */
    function densification($msan,$olt)
    {
        if(!empty($msan)) {
            $densification = (new \App\Repositories\DensificationsRepository())->findByMsan($msan);
        }else {
            $densification = (new \App\Repositories\DensificationsRepository())->findByMsan($olt);
        }
        return (!is_null($densification)) ? "SIM":"NÃO";
    }
}
