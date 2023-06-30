<?php
require_once("models/modBD.php");
class BDController{

    public $tabla;

    public function __construct()
    {
        $this->tabla = 'NombreTabla';
    }

    public function ctrMostrarRegistros($campo=null,$valor=null){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlMostrarRegistros($tabla,$campo,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistro($campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlMostrarRegistro($tabla,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarCampo($campo_devolver,$campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlMostrarCampo($tabla,$campo_devolver,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistrosPaginados($pagina_actual,$registros_por_pagina,$campo= null,$valor = null){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlMostrarRegistrosPaginados($tabla,$pagina_actual,$registros_por_pagina,$campo,$valor);

        return $respuesta;
    }

    public function ctrInsertarRegistros($datos){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlInsertarRegistros($tabla,$datos);

        return $respuesta;
    }

    public function ctrInsertarConImagen($datos){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlInsertarConImagen($tabla,$datos);

        return $respuesta;
    }

    public function ctrEditarRegistros($datos,$campo,$valor){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlEditarRegistros($tabla,$datos,$campo,$valor);

        return $respuesta;
    }

    public function ctrBorrarRegistros($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlBorrarRegistros($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }

    public function ctrBorrarRegistrosConImagen($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modBD::mdlBorrarRegistrosConImagen($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }


    public function ctrConsulta($consulta){
        $respuesta= modBD::mdlConsulta($consulta);

        return $respuesta;
    }
}