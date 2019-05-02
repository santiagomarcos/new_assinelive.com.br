<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 02/05/2019
 * Time: 11:00
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function authenticate(Request $request)
    {
        $args = $request->all();
        $service = (new AdministrativeAuthService());
        $attempt = $service->attempt($args['username'], $args['password']);
        if (!$attempt) {
            $loginRoute = route('admin.auth.login');
            return redirect($loginRoute)
                ->with('error',"Usuário ou Senha inválido");
        }
        $redirect = route('home');
        return redirect($redirect);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        $service = (new AdministrativeAuthService());
        $service->deauthenticate();
        return redirect()->route('admin.auth.login');
    }

}
