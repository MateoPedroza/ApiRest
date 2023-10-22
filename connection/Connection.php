<?php

    class Conecction extends mysqli {
        function __construct(){
            parent::__construct('localhost', 'root', '', 'api_rest');
            $this->set_charset('utf8');
            $this->connect_error == null? 'Conexion exitosa a la BD' : die('Error al conectarse a la BD');
        }
    }