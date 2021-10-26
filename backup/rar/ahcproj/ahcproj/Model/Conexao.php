<?php

class Conexao {

    private static $instance;

    // PDO é a classe reponsavel por fazer a conexão de forma segura.

    // verifica se existe um instâcia da conexão.
    public static function getConn() {
        if(!isset(self::$instance))
            self::$instance = new \PDO('mysql:host=localhost;dbname=banco;charset=utf8','root','');

        return self::$instance;
        // usando self pois $instance é estático.
        // PDO e chamado com uma barra invertida pois é nativo do PHP.
    }

}
