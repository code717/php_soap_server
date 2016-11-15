<?php
/**
 * Created by PhpStorm.
 * User: ughostephan
 * Date: 15/11/2016
 * Time: 22:56
 */

namespace App\Controllers;


use Slim\Http\Request;
use Slim\Http\Response;

class CommonController extends Controller {

    public function index (Request $request, Response $response) {
        return $response->getBody()->write('CommonController index');
    }
}