<?php
$con_base=mysql_connect("localhost","root","admisiones");
$base="rh";
$tablas=mysql_query("show tables from $base;",$con_base);
$texto_inicial.="create database if not exists $base;\n";
$texto_inicial.="use $base;\n";

while($tabla=mysql_fetch_array($tablas)){
$mitabla=$tabla[0];
$creates=mysql_query("show create table $base.$mitabla;",$con_base);
while($create=mysql_fetch_array($creates)){

$texto.=$create[1];
$texto=ereg_replace("\n"," ",$texto);
$datos=mysql_query("select * from $base.$mitabla;",$con_base);
$campos=mysql_num_fields($datos);$regs=mysql_num_rows($datos);

for($i=0;$i<$regs;$i++){
$inserta="\n insert into $mitabla(";

for($j=0;$j<$campos;$j++){
$nombre=mysql_field_name($datos,$j);
$inserta.="$nombre,";}

$inserta=substr($inserta,0,strlen($inserta)-1).") values(";

for($j=0;$j<$campos;$j++){
$tipo=mysql_field_type($datos,$j);
$valor=mysql_result($datos,$i,$j);
switch($tipo){
case "string":case "date":case "time":$valor="'$valor'";break;}
$inserta.="$valor,";}

$inserta=substr($inserta,0,strlen($inserta)-1).");";
$texto.=$inserta;}
}
}
$texto=$texto_inicial.$texto;

$archivo= "rh.sql";
$texto=ereg_replace("CHARSET=latin1","CHARSET=latin1;",$texto);
header("Content-disposition: attachment;filename=$archivo");
header("Content-Type: text/plain");
echo $texto;
?>
