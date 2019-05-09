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
     * @param LeadsViabilityRepository $leadsViabilityRepository
     * @return array
     */
    public function create(Request $request, LeadsViabilityRepository $leadsViabilityRepository)
    {
        $lead = $leadsViabilityRepository->create($request->all());
        return [
            'id' => $lead->id,
        ];
    }

    /**
     * @param Request $request
     * @param LeadsViabilityRepository $leadsViabilityRepository
     */
    public function update(Request $request, LeadsViabilityRepository $leadsViabilityRepository)
    {
        $args = $request->all();
        $lead = $leadsViabilityRepository->update([
            'conversion' => 1
        ], $args['id']);
    }
}
