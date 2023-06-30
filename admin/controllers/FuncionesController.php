<?php
class FuncionesController{

    public static function ctrFechaEs($fecha){
        $fecha_e= new DateTime($fecha);
        $fecha_entrada=date_format($fecha_e,"d-m-Y");

        return $fecha_entrada;
    }

    public static function ctrFechaIng($fecha){
        $fecha_e= new DateTime($fecha);
        $fecha_entrada=date_format($fecha_e,"Y-m-d");

        return $fecha_entrada;
    }

    public static function ctrFechaHumana($fecha){
        $año = substr($fecha,0,4);
        $mes = substr($fecha,5,2);
        if(substr($mes,0,1)==0)
        {
            $mes = substr($mes,1,1);
        }
        $dia = substr($fecha,8,2);

        $meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        $fecha = $dia.", ".$meses[$mes]." de ".$año;

        return $fecha;
    }

    public static function ctrGeneraCadena(){
       

        $numeros=array(0,1,2,3,4,5,6,7,8,9);
        $letras=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

            $cadena="";
            for($i=0;$i<10;$i++)
            {
                $rand1=rand(0,1);

                if($rand1==0)
                {
                    $rand2=rand(0,sizeof($numeros)-1);
                    $cadena.=$numeros[$rand2];
                }
                else
                {
                    $rand2=rand(0,sizeof($letras)-1);
                    $cadena.=$letras[$rand2];
                }
            }

        return $cadena;
    }

    public static function ctrSanitizar($dato,$tipo_dato)
    {
        if($tipo_dato=="cadena")
        {
            $dato=filter_var($dato , FILTER_SANITIZE_STRING);
            return $dato;
        }

        if($tipo_dato=="email")
        {
            $dato=filter_var($dato , FILTER_SANITIZE_EMAIL);
            $dato=filter_var($dato ,FILTER_VALIDATE_EMAIL );  
            return $dato;
        }

        if($tipo_dato=="entero")
        {
            $dato=filter_var($dato ,FILTER_SANITIZE_NUMBER_INT);
            return $dato;
        }

        if($tipo_dato=="flotante")
        {
            $dato=filter_var($dato ,FILTER_SANITIZE_NUMBER_FLOAT);
            return $dato;
        }

        if($tipo_dato=="password")
        {
            $dato=trim($dato);
            return $dato;
        }
    }

    public static function ctrCifrar($pass)
    {
        $pass = hash("sha512",$pass);
        return $pass;
    }

    public static function ctrCerrarSesion()
    {
        unset($_SESSION["usuario"]);
        unset($_SESSION["notificaciones"]);
        echo " <script> window.location='../login';</script>";
    }
    public static function ctrCompruebaLogin(){

        $usuarios_model = new UsuariosController;
        $funciones = new FuncionesController; 
        $usuario = $usuarios_model->ctrConsulta("SELECT * FROM `usuarios` where email like '".$_POST["email"]."' and alta = 1");

        if($usuario != false)
        {

            if($usuario["pass"]==$funciones->ctrCifrar($_POST["pass"]))
            {

                $_SESSION["usuario"]=$usuario;

                $datos["f_acceso"]=date("Y-m-d");
                $usuarios_model->ctrEditarRegistros($datos,"email",$_POST["email"]);

                if($usuario["tipo"] != "administrador")
                {
                    echo "<script>
                    window.location='inicio';
                        </script>";
                }
                else
                {
                    echo "<script>
                    window.location='admin';
                        </script>";
                }

                

            }

        }
    }


}