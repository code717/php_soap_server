<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 15/11/2016
 * Time: 17:30
 */

namespace App\Controllers;


class Controller
{
    protected $container;


    public function __construct($container)
    {
        $this->container = $container;
    }
}