<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 29/04/2019
 * Time: 12:48
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Repositories\LeadsViabilityRepository;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    /**
     * @param Request $request
     * @return bool
     */
    public function create(Request $request)
    {
        $leadsRepository = (new LeadsViabilityRepository());
        $lead = $leadsRepository->create($request->all());
//        return (!$lead) ? false:true;
    }
}
