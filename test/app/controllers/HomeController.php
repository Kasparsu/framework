<?php
/**
 * Created by PhpStorm.
 * User: kaspa
 * Date: 3/29/2019
 * Time: 22:46
 */

namespace App\Controllers;


use App\Db;
use App\Models\User;

class HomeController {


    public function index(){
        $db = new Db();
        $array = $db->sql('SELECT * FROM users');
        var_dump($array);
    }
    public function user(){
        var_dump('user');
    }
}