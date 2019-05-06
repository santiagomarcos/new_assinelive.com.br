<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 06/05/2019
 * Time: 17:08
 */

namespace App\Services;


use DavidePastore\Ipinfo\Ipinfo;

class IpInfoService
{
    public function __construct()
    {
        $this->ipinfo = (new Ipinfo([
            'token' => 'c4f78e90137c52'
        ]));
    }

    public function getIP($ip)
    {
       $detail = $this->ipinfo->getFullIpDetails($ip);
       return $detail;
    }
}