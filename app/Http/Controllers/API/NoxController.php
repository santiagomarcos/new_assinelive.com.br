<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 12:35
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mailgun\Mailgun;

class NoxController extends Controller
{
    public function sendEmail(Request $request)
    {
        $mgClient = new Mailgun('key-2dde12b672e70384e927810d92eab93a');
        $domain = "mail.localizedados.info";

        $test = view('templates.emails.send')
            ->withValues($request->all());

        $result = $mgClient->sendMessage($domain, array(
            'from'    => 'Assine Live <account@'.$domain.'>',
            'to'      => "Digital <contato@assinelivetim.com.br	>",
            'subject' => 'Nova Venda',
            'html'    => $test
        ));

        return [
            'success' => true
        ];

    }

}
