<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

if(isset($_GET["elemento"]))
{
    include_once("views/partials/".$_GET["elemento"].".view.php");
}
else
{
    echo " <script> window.location='inicio';</script>";
}


