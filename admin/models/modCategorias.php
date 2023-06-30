<?php

require_once("models/Conexion.php");

class modCategorias{

    public static function mdlMostrarRegistros($tabla,$campo,$valor){
        if($campo == null or $valor == null)
        {
            $sentenciaMYSQL="SELECT * FROM $tabla ";
        }
        else
        {
            $sentenciaMYSQL="SELECT * FROM $tabla where $campo like '$valor' ";
        }
        $sentencia=Conexion::conectar()->prepare($sentenciaMYSQL);
        $sentencia->execute();
        $registros=$sentencia-> fetchall(PDO::FETCH_ASSOC);

        return $registros;

    }

    public static function mdlMostrarRegistro($tabla,$campo_filtrar,$valor){

        $sentenciaMYSQL="SELECT * FROM $tabla where $campo_filtrar like '$valor'";
        $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
        $sentenciaMYSQL->execute();
        $registro = $sentenciaMYSQL->fetch();
        
        return $registro;

    }

    public static function mdlMostrarCampo($tabla,$campo_devolver,$campo_filtrar,$valor){

        $sentenciaMYSQL="SELECT * FROM $tabla where $campo_filtrar like '$valor'";
        $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
        $sentenciaMYSQL->execute();
        $registro = $sentenciaMYSQL->fetch();
        
        return $registro[$campo_devolver];

    }

    public static function mdlMostrarRegistrosPaginados($tabla,$pagina_actual,$registros_por_pagina,$campo,$valor){
        if($campo == null or $valor == null)
        {
            $sentenciaMYSQL="SELECT * FROM $tabla ";
        }
        else
        {
            $sentenciaMYSQL="SELECT * FROM $tabla where $campo like '$valor' ";
        }
        $sentenciaMYSQL.=" LIMIT ";
        $sentenciaMYSQL.=$pagina_actual*$registros_por_pagina;
        $sentenciaMYSQL.=",".$registros_por_pagina;
        //echo $sentenciaMYSQL;
        $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
        $sentenciaMYSQL->execute();
        $registros=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);


        return $registros;

    }

    public static function mdlInsertarRegistros($tabla,$datos){
        
        $sentenciaMYSQL="INSERT INTO ".$tabla." ";
        $sentenciaMYSQL.="(".implode(",",array_keys($datos)).")";
        $sentenciaMYSQL.=" VALUES ";
        $sentenciaMYSQL.="('".implode("','",$datos)."')";
        //var_dump($sentenciaMYSQL);   
        $sentenciaMYSQL = Conexion::conectar()->prepare($sentenciaMYSQL);
        $sentenciaMYSQL->execute();

    }

    public static function mdlInsertarConImagen($tabla,$datos)
    {
        // I M P O R T A N T E el formulario debe ser asi <form method="POST" enctype="multipart/form-data"> , porque sin la linea de enctype no sube las imagenes //
        $error="";
        if($_FILES["foto"]["size"]>0)
        {
            if(!getimagesize($_FILES['foto']['tmp_name']))
            {
                $error.="No has subido una imagen";  
            }
            else if(!str_contains($_FILES['foto']['name'],"png") && !str_contains($_FILES['foto']['name'],"jpg") && !str_contains($_FILES['foto']['name'],"jpeg"))
            {
                $error.="No has subido una imagen jpg o png"; 
            }
            else if($_FILES["foto"]["size"]>2097152)
            {
                $error.="La foto es demasiado grande, maximo 2MB"; 
            }
            else
            {
                //Parte para imagenes ---------------------------------
                $rand=rand(1000,9999);
                $origen=$_FILES["foto"]["tmp_name"];
                $destino='img/'.$rand."_".$_FILES["foto"]["name"];
                //var_dump($_FILES);
                move_uploaded_file($origen,$destino);
                //----------------------------------------------------
                $datos["foto"]=$rand."_".$_FILES["foto"]["name"];
                modCategorias::mdlInsertarRegistros($tabla,$datos);

            }
        }
        else
        {
            //Parte para imagenes ---------------------------------
            $rand=rand(1000,9999);
            //----------------------------------------------------
            $datos["foto"]="default.jpg";
            modCategorias::mdlInsertarRegistros($tabla,$datos);
        }

        return $error;
        
    }

    public static function mdlEditarRegistros($tabla,$datos,$campo,$valor){

        $sentencia="UPDATE $tabla SET ";
        foreach($datos as $clave=>$contenido)
        {
            $sentencia.=$clave."='".$contenido."' ,";
        }
        $sentencia = rtrim($sentencia, ",");
        $sentencia.=" WHERE $campo like '$valor'";
        // var_dump($sentencia);
        $sentencia = Conexion::conectar()->prepare($sentencia);
        $sentencia->execute();
        $resultado="Update exitosa";
    
        return $resultado;
    
    }

    public static function mdlBorrarRegistros($tabla,$campo_filtrar,$valores_eliminar){
    
        $sentencia="DELETE FROM $tabla WHERE $campo_filtrar in (".str_repeat("?,", count($valores_eliminar) - 1)."?)";
        //var_dump($sentencia);
        $stmt= Conexion::conectar()->prepare($sentencia);
        $stmt->execute($valores_eliminar);
    
    }

    public static function mdlBorrarRegistrosConImagen($tabla,$campo_filtrar,$valores_eliminar){

        //---- ELIMINAR IMAGENES----------------------------------
        $registros=modCategorias::mdlMostrarRegistros($tabla,null,null);
        foreach($valores_eliminar as $id)// $valores_eliminar es un array escalar con los ids de las fotos a eliminar
        {
            foreach($registros as $registro)
            {
                if($registro["id"]==$id)
                {
                    if($registro["id"]==$id)
                {
                    if($registro["imagen"]!="views/img/categorias/default.jpg")
                    {
                        unlink("../".$registro["imagen"]."");
                    }
                }
                }
            }
        }
    
        $sentencia="DELETE FROM $tabla WHERE $campo_filtrar in (".str_repeat("?,", count($valores_eliminar) - 1)."?)";
        //var_dump($sentencia);
        $stmt= Conexion::conectar()->prepare($sentencia);
        $stmt->execute($valores_eliminar);
    
    }


    public static function mdlConsulta($consulta){

        $sentencia=Conexion::conectar()->prepare($consulta);
        $sentencia->execute();
        $registros=$sentencia-> fetchall(PDO::FETCH_ASSOC);

        return $registros;

    }
}