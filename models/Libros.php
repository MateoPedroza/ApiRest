<?php

use FTP\Connection;

    require_once "connection/Connection.php";
    class Libros {
        public static function getAll(){
            $db = new Conecction();
            $query = "SELECT * FROM libro";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows){
                while($row = $resultado->fetch_assoc()){
                    $datos[] = [
                        'id' => $row['id'],
                        'titulo' => $row['titulo'],
                        'autor' => $row['autor'],
                        'fecha_publicacion' => $row['fecha_publicacion'],
                        'genero' => $row['genero']
                    ];
                }
                return $datos;
            }
            return $datos;
        }


        public static function getWhere($id_libro){
            $db = new Conecction();
            $query = "SELECT * FROM libro WHERE id=$id_libro";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows){
                while($row = $resultado->fetch_assoc()){
                    $datos[] = [
                        'id' => $row['id'],
                        'titulo' => $row['titulo'],
                        'autor' => $row['autor'],
                        'fecha_publicacion' => $row['fecha_publicacion'],
                        'genero' => $row['genero']
                    ];
                }
                return $datos;
            }
            return $datos;
        }



        public static function insert($titulo, $autor, $fecha_publicacion, $genero){
            $db = new Connection ();
            $query = "insert into libro (titulo, autor, fecha_publicacion, genero)
            values('".$titulo."', '".$autor."', '".$fecha_publicacion."', '".$genero."')";
            $db->query($query);
            if($db->affected_rows){
                return true;
            }
            return false;
           
        }


        public static function update($id_libro,$titulo, $autor, $fecha_publicacion, $genero){
            $db = new Connection ();
            $query = "update libro SET
            nombre='".$titulo."', autor='".$autor."', fecha_publicacion='".$fecha_publicacion."', genero='".$genero."' WHERE id=$id_libro";
            $db->query($query);
            if($db->affected_rows){
                return true;
            } 
            return false;
           
        }


        public static function delete($id_libro){
            $db = new Connection();
            $query = "delete from libros where id=$id_libro";
            $db->query($query);
            if($db->affected_rows){
                return TRUE;
            }
            return FALSE; 
        }
} 