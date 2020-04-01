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
        $search = searchSuperList(str_replace('-','', $args['zip']), $args['number']);
        /**
         * Enum com todas as campanhas listadas até o momento.
         * Ps. nem eles se decidem o que vão trabalhar nessa porra.
         */
        $enum = [
            'FTTH' => 1,
            'FTTH Ouro' => 2,
            'FTTC' => 3,
            'FTTC Super Ouro' => 4,
            'FTTC Ouro' => 4,

        ];
        /**
         * Retorno Caso o endereço não seja encontrado na Merda Super Lista
         * Ps: Morte ao Babaca que desenvolveu esse layout de bosta na lista.
         */
        if(!$search){
            $wttxSearch = searchWttxSuperList(str_replace('-','', $args['zip']));
//            dd($wttxSearch);
            if(!$wttxSearch){
                return [
                    'success' =>  false,
                    'status' => "ENDEREÇO NÃO ENCONTRADO NA SUPER LISTA",
                    'campaign' => "NÃO ENCONTRADO",
                    'city' => "NÃO ENCONTRADO",
                    'msanb' => "NÃO ENCONTRADO" ,
                    'hh' => "NÃO ENCONTRADO",
                    'predio_fttc' =>"NÃO ENCONTRADO",
                    'predio_ftth' => "NÃO ENCONTRADO",
                    'topologia' => "NÂO ENCONTRADO"
                ];
            } else {
                return [
                    'success' =>  true,
                    'status' => $wttxSearch->AVALIAÇÃO,
                    'campaign' => 5,
                    'city' => $wttxSearch->LOCALIDADE,
                    'msanb' => "NÃO ENCONTRADO" ,
                    'hh' => "NÃO ENCONTRADO",
                    'predio_fttc' =>"NÃO ENCONTRADO",
                    'predio_ftth' => "NÃO ENCONTRADO",
                    'topologia' => "WTTX"
                ];
            }

        }
        /**
         * Caso Haver Restrição de Endereço em Ambos os Casos.
         * Ps. Morte ao retardado que deixa os campos emptys ¬¬ Empty não é null jumento.
         */
        if($search->RESTRICAO_FTTH == "Sim" || $search->RESTRICAO_FTTC == "Sim") {
            return [
                'success' => false,
                'status' => "ENDEREÇO RESTRITO PARA VENDA {$search->DESCRICAO_RESTRICAO_FTTH}",
                'campaign' => "NÃO ENCONTRADO",
                'city' => "NÃO ENCONTRADO",
                'msanb' => "NÃO ENCONTRADO" ,
                'hh' => "NÃO ENCONTRADO",
                'predio_fttc' =>"NÃO ENCONTRADO",
                'predio_ftth' => "NÃO ENCONTRADO",
                'topologia' => "NÂO ENCONTRADO"
            ];
        }
        /**
         * Retorno os Valores de Campanha com todas as segmentações
         * Ps. Tenho que dar uma de adivinho ai embaixo devido que nem a própria TIM sabe o que é a merda do endereço
         */
        return [
            'success' => (!$search) ? false:true,
            'status' => "OK",
            'campaign' => (!$search) ? "NÃO ENCONTRADO":
                (($search->SEGMENTO_FTTH == "NI"
                    ? ((key_exists($search->SEGMENTO_FTTC, $enum)) ? $enum[$search->SEGMENTO_FTTC] : "NotDefined")
                    : ((key_exists($search->SEGMENTO_FTTH, $enum)) ? $enum[$search->SEGMENTO_FTTH] : "NotDefined")
                )),
            'city' => (!$search) ? "NÃO ENCONTRADO": $search->CIDADE,
            'msanb' => (!$search) ? "NÃO ENCONTRADO": (($search->TIPO_35B_MSAN_FTTC == "MIGRADA") ? "SIM":"NÃO") ,
            'hh' => (!$search) ? "NÃO ENCONTRADO": (($search->HH >= '20' && $search->PREDIO_FFTH != "NÃO SE APLICA" && $search->PREDIO_FFTC != "NÃO SE APLICA") ? true:false),
            'predio_fttc' => (!$search) ? "NÃO ENCONTRADO": $search->PREDIO_FTTC,
            'predio_ftth' => (!$search) ? "NÃO ENCONTRADO": $search->PREDIO_FTTH,
            'topologia' => (!$search) ? "NÂO ENCONTRADO":$search->TOPOLOGIA,
            'values' => treatOffer($search->OFERTA_FOCO),
            'densification' => densification($search->MSAN_FTTC,$search->OLT_FTTH),
        ];
    }

}
