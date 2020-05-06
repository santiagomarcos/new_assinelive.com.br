<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 29/04/2019
 * Time: 12:13
 */

namespace App\Http\Controllers\API;


use App\Models\CallingMe;
use App\Repositories\CallingMeRespository;
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
        $message = (new CallingMeRespository())->create([
            'name' => strtoupper($args['name']),
            'number_phone' => $args['phone'],
        ]);
        $vowels = array("(", ")", "-", " ",);
        $onlyconsonants = str_replace($vowels, "", $args['phone']);

        $res = $this->client->request('POST', 'http://newtimesp.ddns.net:8003/contact/digital?contact_name='.$args['name'].'&queue=digital&billing_group_id=1&to[1]='.$onlyconsonants, [
            'auth' => ["tabuladorweb", "ij29Kg9QooK77cl"]
        ]);
    }
}
