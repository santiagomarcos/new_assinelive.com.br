<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 02/05/2019
 * Time: 17:41
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repositories\AffiliatesRepository;

class AffiliatesController extends Controller
{
    public function all(AffiliatesRepository $affiliatesRepository)
    {
        return view('pages.admin.affiliates.all')
            ->withAffiliates($affiliatesRepository->affiliateTable());
    }

}
