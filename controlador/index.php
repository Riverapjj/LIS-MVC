<?php
require_once("modelo/index.php");
require("validaciones.php");
class modelocontroller{
    private $model;
    private $errores;
    public function __construct(){
       $this->model = new Modelo();
       $this->errores = array();
    }
    //mostrar
    static function index(){
        $producto = new Modelo();
        $dato     =  $producto->mostrar("productos","1");
        require_once("vista/index.php");


    }

    static function nuevo(){
      
        require_once("vista/nuevo.php");
    
    }
    static function guardar(){
      
        $nombre=$_REQUEST['nombre'];
        $precio=$_REQUEST['precio'];
        $data="'".$nombre."',".$precio;

        if (!isset($nombre) || isEmpty($nombre)) {
            //header("location:index.php?m=nuevo");
            echo "<script>alert('Debes ingresar un nombre')</script>";
        }else if(!isString($nombre)) {
            //header("location:index.php?m=nuevo");
            echo "<script>alert('El nombre solo acepta letras.')</script>";
        }else if (!isset($precio) || isEmpty($precio)) {
           // header("location:index.php?m=nuevo");
            echo "<script>alert('Debes ingresar un precio')</script>";
        }else if(!isDecimal($precio)) {
            //header("location:index.php?m=nuevo");
            echo "<script>alert('Formato de precio incorrecto.')</script>";
        }else {
            
            $producto= new Modelo();
            $dato=$producto->insertar("productos",$data);
            header("location:".urlsite);
        }

    
    }

    static function editar(){
        $id= $_REQUEST['id'];
        $producto= new Modelo();
        
        $dato=$producto->mostrar("productos","id=".$id);
        require_once("vista/editar.php");

    }

    static function actualizar(){
        $id= $_REQUEST['id'];
      
     $nombre=$_REQUEST['nombre'];
     $precio=$_REQUEST['precio'];
     $data="nombre='".$nombre."',precio=".$precio;
     $producto= new Modelo();

     if (!isset($nombre) || isEmpty($nombre)) {
        //header("location:index.php?m=nuevo");
        echo "<script>alert('Debes ingresar un nombre')</script>";
    }else if(!isString($nombre)) {
        //header("location:index.php?m=nuevo");
        echo "<script>alert('El nombre solo acepta letras.')</script>";
    }else if (!isset($precio) || isEmpty($precio)) {
       // header("location:index.php?m=nuevo");
        echo "<script>alert('Debes ingresar un precio')</script>";
    }else if(!isDecimal($precio)) {
        //header("location:index.php?m=nuevo");
        echo "<script>alert('Formato de precio incorrecto.')</script>";
    }else {
        
        $producto= new Modelo();
        $dato=$producto->actualizar("productos",$data,"id=".$id);
        header("location:".urlsite);
    }


    
    }
    static function eliminar(){
        $id= $_REQUEST['id'];
        $producto= new Modelo();
        $dato=$producto->eliminar("productos","id=".$id);
        header("location:".urlsite);

    
    }

}