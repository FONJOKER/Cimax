<?php
require_once("models/modNiveles.php");
class NivelesController{

    public $tabla;

    public function __construct()
    {
        $this->tabla = 'niveles';
    }

    public function ctrMostrarRegistros($campo=null,$valor=null){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlMostrarRegistros($tabla,$campo,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistro($campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlMostrarRegistro($tabla,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarCampo($campo_devolver,$campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlMostrarCampo($tabla,$campo_devolver,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistrosPaginados($pagina_actual,$registros_por_pagina,$campo= null,$valor = null){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlMostrarRegistrosPaginados($tabla,$pagina_actual,$registros_por_pagina,$campo,$valor);

        return $respuesta;
    }

    public function ctrInsertarRegistros($datos){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlInsertarRegistros($tabla,$datos);

        return $respuesta;
    }

    public function ctrInsertarConImagen($datos){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlInsertarConImagen($tabla,$datos);

        return $respuesta;
    }

    public function ctrEditarRegistros($datos,$campo,$valor){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlEditarRegistros($tabla,$datos,$campo,$valor);

        return $respuesta;
    }

    public function ctrBorrarRegistros($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlBorrarRegistros($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }

    public function ctrBorrarRegistrosConImagen($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modNiveles::mdlBorrarRegistrosConImagen($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }


    public function ctrConsulta($consulta){
        $respuesta= modNiveles::mdlConsulta($consulta);

        return $respuesta;
    }
}