<?php

class DataBase extends PDO{

    public function __construct() {
        try{
            parent::__construct('mysql:host=localhost;dbname=fortest','root','');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->exec("set names utf8");
        } catch (Exception $ex) {
            echo "Error al conectar a la base de datos. <br>".$ex;
        }

    }

}
