<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Repositories\SuperListRepository;
use Illuminate\Http\Request;

class SuperListController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function searchAddress(Request $request)
    {
        $args = $request->all();
        /**
         * Método que pega o Caché no periodo de 24 Horas para realizar consulta no banco, assim mínimizando a quantidade
         * de querys no DB que já é uma bosta realizar uma query em 1 milhão de linhas....
         *
         */
        $search = searchSuperListCEP(str_replace('-','', $args['zip']));

        return [
            'success' => (bool) !empty($search)
        ];
    }

}
