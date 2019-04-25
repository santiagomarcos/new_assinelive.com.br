<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 18/04/2019
 * Time: 14:59
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function verification()
    {
        return view('pages.function.verification');
    }

    public function verifications(Request $request)
    {

        $plan = $request->plan;
        $plan = (is_null($plan)) ? "60" : $plan;
//        dd($plan);

        return view('pages.function.verification')
            ->withPlan($plan);

    }
}
