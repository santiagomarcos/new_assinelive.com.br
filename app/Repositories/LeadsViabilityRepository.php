<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 29/04/2019
 * Time: 12:42
 */

namespace App\Repositories;


use App\Models\LeadViability;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class LeadsViabilityRepository extends Repository
{
    /**
     * @return LeadViability|Model
     */
    public function getModel()
    {
        return (new LeadViability());
    }

    /**
     * @param null $start
     * @param null $end
     * @return mixed
     */
    public function findByDay($start = null, $end = null)
    {
        $start = ($start == null) ? Carbon::now()->format('Y-m-d 00:00:00'): Carbon::parse($start)->format("Y-m-d 00:00:00");
        $end = ($end == null) ? Carbon::now()->format('Y-m-d 23:59:59'): Carbon::parse($end)->format("Y-m-d 23:59:00");

        return $this->getModel()
            ->whereBetween('created_at',[$start, $end])
            ->get();
    }

    public function findAllOrder()
    {
        return $this->getModel()->orderBy('id','desc')->get();
    }


}
