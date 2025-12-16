<?php
// Autor: Néstor González <nestor@uco.es>
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
?>