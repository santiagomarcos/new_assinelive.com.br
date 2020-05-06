<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 22/04/2019
 * Time: 12:35
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Repositories\RecoveryPasswordRepository;
use Illuminate\Http\Request;
use Mailgun\Mailgun;
use PHPMailer\PHPMailer\PHPMailer;


class NoxController extends Controller
{
    public function sendEmail(Request $request)
    {
        $mgClient = new Mailgun('key-2dde12b672e70384e927810d92eab93a');
        $domain = "mail.localizedados.info";

        $test = view('templates.emails.send')
            ->withValues($request->all());

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'mail.assinelivetim.com.br';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@assinelivetim.com.br';
        $mail->Password = 'digital@2020';
        $mail->setFrom('contato@assinelivetim.com.br', 'contato@assinelive.com.br');
        $mail->addAddress('contato@assinelivetim.com.br');


        $mail->Subject = 'Nova Venda';
        $mail->msgHTML(utf8_decode($test));
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {

            return [
                'success' => true,
            ];


        }
    }

}
