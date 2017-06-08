<?php 
class Conexion{
    private $conexion; 
    private $total_consultas;
  
  public function conectar(){ 
    $servidor='localhost';
    $user = 'root';
    $pass = '12345678';
    $basedatos = 'rh';

    if(!isset($this->conexion)){
      $this->conexion = (mysql_connect($servidor,$user,$pass)) or die(mysql_error());
      mysql_set_charset('utf8');
        mysql_select_db($basedatos,$this->conexion) or die(mysql_error());

    }
  }
  
  public function consulta($consulta){ 
    $this->total_consultas++; 
    $resultado = mysql_query($consulta);
    if(!$resultado){ 
      echo 'MySQL Error: ' . mysql_error();
        exit;
    }
    return $resultado;
  }
  
  public function fetch_array($consulta){
    return mysql_fetch_array($consulta);
  }
  
  public function num_rows($consulta){
    return mysql_num_rows($consulta);
  }
  
  public function getTotalConsultas(){
    return $this->total_consultas; 
  }
    
  public function desconectar(){
    mysql_close($this->conexion);
  }
}
?>
