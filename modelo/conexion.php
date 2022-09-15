<?php

class Conexion
{

    public static function conectar()
    {
        $contraseña = 'usersql$$nisira';
        $usuario = 'sa';
        $nombreBaseDeDatos = 'SATURNO';
        $rutaServidor = '192.168.1.7';
        try {
            $db = new PDO("sqlsrv:Server=$rutaServidor;Database=$nombreBaseDeDatos", $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            echo "Ocurrió un error con la base de datos: " . $e->getMessage();
        }
    }
}
