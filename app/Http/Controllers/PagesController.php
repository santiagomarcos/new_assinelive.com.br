<?php
/**
 * Created by PhpStorm.
 * User: lssilva
 * Date: 18/04/2019
 * Time: 14:59
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function verification()
    {
        return view('pages.function.verification');
    }
}