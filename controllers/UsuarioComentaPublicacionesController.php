<?php
require_once("models/modUsuarioComentaPublicaciones.php");
class UsuarioComentaPublicacionesController{

    public $tabla;

    public function __construct()
    {
        $this->tabla = 'usuarios_comenta_publicaciones';
    }

    public function ctrMostrarRegistros($campo=null,$valor=null){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlMostrarRegistros($tabla,$campo,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistro($campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlMostrarRegistro($tabla,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarCampo($campo_devolver,$campo_filtrar,$valor){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlMostrarCampo($tabla,$campo_devolver,$campo_filtrar,$valor);

        return $respuesta;
    }

    public function ctrMostrarRegistrosPaginados($pagina_actual,$registros_por_pagina,$campo= null,$valor = null){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlMostrarRegistrosPaginados($tabla,$pagina_actual,$registros_por_pagina,$campo,$valor);

        return $respuesta;
    }

    public function ctrInsertarRegistros($datos){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlInsertarRegistros($tabla,$datos);

        return $respuesta;
    }

    public function ctrInsertarConImagen($datos){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlInsertarConImagen($tabla,$datos);

        return $respuesta;
    }

    public function ctrEditarRegistros($datos,$campo,$valor){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlEditarRegistros($tabla,$datos,$campo,$valor);

        return $respuesta;
    }

    public function ctrBorrarRegistros($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlBorrarRegistros($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }

    public function ctrBorrarRegistrosConImagen($campo_filtrar,$valores_eliminar){
        $tabla=$this->tabla;
        $respuesta= modUsuarioComentaPublicaciones::mdlBorrarRegistrosConImagen($tabla,$campo_filtrar,$valores_eliminar);

        return $respuesta;
    }


    public function ctrConsulta($consulta){
        $respuesta= modUsuarioComentaPublicaciones::mdlConsulta($consulta);

        return $respuesta;
    }
}