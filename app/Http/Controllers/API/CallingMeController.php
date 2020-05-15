<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 29/04/2019
 * Time: 12:13
 */

namespace App\Http\Controllers\API;


use App\Models\CallingMe;
use App\Repositories\CallingMeRepository;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CallingMeController
{
    public function __construct()
    {
        $this->client = (new Client());
    }

    public function create(Request $request)
    {
        $args = $request->all();
        $message = (new CallingMeRepository())->create([
            'name' => strtoupper($args['name']),
            'number_phone' => $args['phone'],
        ]);

    }
}
