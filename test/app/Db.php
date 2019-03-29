<?php
/**
 * Created by PhpStorm.
 * User: kaspa
 * Date: 3/29/2019
 * Time: 23:51
 */

namespace App;

use PDO;
class Db {
    public $conn;
    /**
     * Db constructor.
     */
    public function __construct() {
        $this->conn = new PDO("mysql:host=database;dbname=homestead", 'root', 'secret');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function sql($sql) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}