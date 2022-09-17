<?php
$conexion=new mysqli("localhost","root","","notas_master");
$conexion->query("set names 'utf8'");

$conexion->query("select*from notas");
<!--modolo 62 255 3:39-->