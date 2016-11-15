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
use SoapClient;

class ClientController extends Controller {

    public function index (Request $request, Response $response) {
        $client = new SoapClient("http://[insert wsdl file path here]/stockquote.wsdl");

        print($client->getQuote("ibm"));
    }
}