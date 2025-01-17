<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 18/04/2019
 * Time: 14:59
 */

namespace App\Http\Controllers;


use App\Services\IpInfoService;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function home(Request $request)
    {
        $code = (!isset($request->all()['ref'])) ? null:$request->all()['ref'];
        $service = (new IpInfoService());
        $detail = $service->getIP($request->getClientIp());
        $city = $detail->getRegion();
        getPartner($code);
        return view('index')
            ->withCity($city);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function verification()
    {
        return view('pages.function.verification');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function verifications(Request $request)
    {
        $plan = $request->plan;
        $plan = (is_null($plan)) ? "60" : $plan;
        $service = (new IpInfoService());
        $detail = $service->getIP($request->getClientIp());
        $city = $detail->getRegion();

        return view('pages.function.verification')
            ->withPlan($plan)
            ->withCity($city);
    }

    public function faq(Request $request)
    {
        $service = (new IpInfoService());
        $detail = $service->getIP($request->getClientIp());
        $city = $detail->getRegion();

        return view('pages.function.faq')
            ->withCity($city);
    }

    public function regulaments(Request $request)
    {
        $service = (new IpInfoService());
        $detail = $service->getIP($request->getClientIp());
        $city = $detail->getRegion();

        return view('pages.function.regulaments')
            ->withCity($city);
    }
}
