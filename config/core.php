<?php
// mostrar error 
error_reporting(E_ALL);

// iniciar sesion en php

sesion_start();

// selecccionar zona horaria

date_default_timezone_set('Europe/Madrid');

// pagina de inicio por defecto

$home_url="http://localhost/PHP%2018-19/login";

//pagina devuelta en la url su parametro por defecto es la 1

$page = isset($_GET['page']) ? $_GET['page'] : 1;

//numero de filas retornadas por pagina

$records_per_page = 5;

// calculo del maximo de la longitud de una consulta

$form_record_num = ($records_per_page * $page) - $records_per_page;
?>