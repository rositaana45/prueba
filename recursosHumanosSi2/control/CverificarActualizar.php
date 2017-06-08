
<?php
 $db = new Conexion;
         $db->conectar();

                $query = "CALL mostrar_sitienen_privilegio('$grupoId','3')";
                $resultadoEmpresa = $db->consulta($query);

                  $db->desconectar();

     while ($fila=$db->fetch_array($resultadoEmpresa)){

          $actualizar=$fila['cantidad'];
      
         }
?>