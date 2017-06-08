<?php

 $db = new Conexion;
         $db->conectar();

                $query2 = "CALL mostrar_sitienen_privilegio('$grupoId','1')";
                $resultadoEmpresa2 = $db->consulta($query2);

                  $db->desconectar();

     while ($fila2=$db->fetch_array($resultadoEmpresa2)){

          $insertar=$fila2['cantidad'];
      
         }
?>