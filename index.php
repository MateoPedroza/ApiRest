<?php

require_once "models/Libros.php";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo json_encode(Libros::getAll());
        break; 

        default:
        break;
}