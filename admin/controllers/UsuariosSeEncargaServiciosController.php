<?php
require_once("models/modUsuariosSeEncargaServicios.php");
class UsuariosSeEncargaServiciosController{

    public $tabla;

    public function __construct()
    {
        $this->tabla = 'usuarios_se_encarga_servicios';
    }

    public function ctrMostrarRegistros($campo=null,$valor=null){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlMostrarRegistros($tabla,$campo,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistro($campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlMostrarRegistro($tabla,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarCampo($campo_devolver,$campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlMostrarCampo($tabla,$campo_devolver,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistrosPaginados($pagina_actual,$registros_por_pagina,$campo= null,$valor = null){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlMostrarRegistrosPaginados($tabla,$pagina_actual,$registros_por_pagina,$campo,$valor);

        return $respuesta;
    }

    public function ctrInsertarRegistros($datos){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlInsertarRegistros($tabla,$datos);

        return $respuesta;
    }

    public function ctrInsertarConImagen($datos){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlInsertarConImagen($tabla,$datos);

        return $respuesta;
    }

    public function ctrEditarRegistros($datos,$campo,$valor){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlEditarRegistros($tabla,$datos,$campo,$valor);

        return $respuesta;
    }

    public function ctrBorrarRegistros($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlBorrarRegistros($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }

    public function ctrBorrarRegistrosConImagen($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modUsuariosSeEncargaServicios::mdlBorrarRegistrosConImagen($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }


    public function ctrConsulta($consulta){
        $respuesta= modUsuariosSeEncargaServicios::mdlConsulta($consulta);

        return $respuesta;
    }
}