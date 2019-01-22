<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 22/01/2019
 * Time: 03:09 PM
 */

namespace AppData\Model;


class Login
{
    private $tabla="users", $email,$pass;

    public function __construct()
    {
        $this->conexion= new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function verify()
    {
        $sql="SELECT email, password FROM {$this->tabla} where email='{$this->email}' and password='{$this->pass}'";

        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
}