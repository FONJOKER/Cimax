<?php
require_once("models/modPublicaciones.php");
class PublicacionesController{

    public $tabla;

    public function __construct()
    {
        $this->tabla = 'publicaciones';
    }

    public function ctrMostrarRegistros($campo=null,$valor=null){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlMostrarRegistros($tabla,$campo,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistro($campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlMostrarRegistro($tabla,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarCampo($campo_devolver,$campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlMostrarCampo($tabla,$campo_devolver,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistrosPaginados($pagina_actual,$registros_por_pagina,$campo= null,$valor = null){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlMostrarRegistrosPaginados($tabla,$pagina_actual,$registros_por_pagina,$campo,$valor);

        return $respuesta;
    }

    public function ctrInsertarRegistros($datos){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlInsertarRegistros($tabla,$datos);

        return $respuesta;
    }

    public function ctrInsertarConImagen($datos){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlInsertarConImagen($tabla,$datos);

        return $respuesta;
    }

    public function ctrEditarRegistros($datos,$campo,$valor){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlEditarRegistros($tabla,$datos,$campo,$valor);

        return $respuesta;
    }

    public function ctrBorrarRegistros($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlBorrarRegistros($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }

    public function ctrBorrarRegistrosConImagen($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modPublicaciones::mdlBorrarRegistrosConImagen($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }


    public function ctrConsulta($consulta){
        $respuesta= modPublicaciones::mdlConsulta($consulta);

        return $respuesta;
    }
}