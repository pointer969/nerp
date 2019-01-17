<?php

/// DEFINE A ZONA DO HORARIO DO SISTEMA
date_default_timezone_set('America/Manaus');
//Constantes abaixo offline


//*
// DEFINICAO DE URLS LOCAIS
define('URL','http://'.$_SERVER['SERVER_NAME'].'/');
//define('URL','http://'.$_SERVER['SERVER_NAME'].'/app/');
define('Folder','http://'.$_SERVER['SERVER_NAME'].'/app/public/');




/*/
// DEFINICAO DE URLS REMOTAS
define('URL','http://'.$_SERVER['SERVER_NAME'].'/sistemas/erp/');
define('Folder','http://'.$_SERVER['SERVER_NAME'].'/sistemas/erp/app/public/');
//*/