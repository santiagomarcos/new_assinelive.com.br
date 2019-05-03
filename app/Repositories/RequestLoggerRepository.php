<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 03/05/2019
 * Time: 10:14
 */

namespace App\Repositories;


use App\Models\RequestLog;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class RequestLoggerRepository extends Repository
{
    /**
     * @return RequestLog|Model
     */
    public function getModel()
    {
        return (new RequestLog());
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
            ->get()
            ->groupBy('ip');
    }


}
