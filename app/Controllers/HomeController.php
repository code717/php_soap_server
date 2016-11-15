<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 15/11/2016
 * Time: 17:34
 */

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends Controller {

    public function index(Request $request, Response $response) {
        return $response->getBody()->write('Hello world');
    }
}