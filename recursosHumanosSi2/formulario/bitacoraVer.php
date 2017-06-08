<?php
session_start();
$usuario=$_SESSION['usuario'];
$idIni=$_SESSION['idIni'];
$grupoId=$_SESSION['grupoId'];
$insertar=$_SESSION['insertar'];
$actualizar=$_SESSION['actualizar'];
$vistas=$_SESSION['vistas'];
?>
<style type="text/css">
#dis{
    display:none;
}
</style>

<div id="dis">
    <!-- mensaje de alerta -->
</div>


<div class="content-loader">
        <table cellspacing="0" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th class="col-lg-1">Id Sesion</th> 
        <th class="col-lg-1">Acciones</th>
        <th class="col-lg-4">Inicio</th> 
        <th class="col-lg-4">Nombre Usuario</th> 
         
        </tr>
        </thead>
        <tbody>



  <?PHP
               include_once('../entidad/conexion.php');
                
                $db = new Conexion;
                 
                $db->conectar();
                $query = "CALL mostrar_inicioSesion()";
                $resultadoEmpresa = $db->consulta($query);
                     
         while ($fila=$db->fetch_array($resultadoEmpresa)){
            ?>

            <tr>

            <td><?php echo $fila['idSesion']; ?></td>  

            <td class="text-center">
                            
                    <a target="_blanK" id="<?php/* echo $row['ID'];*/ ?>" class="#" href="../control/pdfInicioSesion.php" title="Imprimir"><span class="glyphicon glyphicon-print"></span>
                    </a>
            </td>

            <td><?php echo $fila['inicio']; ?></td>     
             <td><?php echo $fila['nombreUsuario']; ?></td>    
             

            </tr>

            <?php
            }  $db->desconectar();
        ?>


        <script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();

    $('#example')
    .removeClass( 'display' )
    .addClass('table table-bordered');
});
</script>


        </tbody>
        </table>
        </div>






     