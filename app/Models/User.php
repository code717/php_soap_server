<?php
/**
 * Created by PhpStorm.
 * User: ughostephan
 * Date: 15/11/2016
 * Time: 23:22
 */

namespace App\Models;


class User {
    public function __construct()
    {
    }

    /**
     * SayHello Function
     * Use test soap service
     * @param string $name
     * @return string Hello ,$name
     */
    public function SayHello($name){
        return "Hello, ".$name;
    }
}