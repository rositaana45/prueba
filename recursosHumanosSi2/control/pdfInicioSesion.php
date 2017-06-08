<?php
require_once('../lib/pdf/mpdf.php');
include_once('../entidad/conexion.php');
       $db = new Conexion;
                 
                $db->conectar();
                $query = "CALL mostrar_inicioSesion()";
                $resultadoEmpresa = $db->consulta($query);

$html = ' <header class="clearfix">
      <div id="logo">
        <img src="../img/logo1mpdf.png" width="10%">
      </div>
      <h1>Inicio de Sesion</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table >
        <thead>
          <tr>
            <th class="service">id</th>
            <th class="service">Inicio Fecha/Hora</th>
            <th class="service">Nombre Usuario</th>
            
          </tr>
        </thead>
        <tbody>';
 while ($fila=$db->fetch_array($resultadoEmpresa)){
$html.='
        <tr>
            <td class="service">'.$fila['idSesion'].'</td>
            <td class="service">'.$fila['inicio'].'</td>
            <td class="service">'.$fila['nombreUsuario'].'</td>
            
          </tr>
         
          ';
}
        $html.= ' 

        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>';
$mpdf=new mPDF('c','A4');
$css=file_get_contents('../bootstrap/css/style1mpdf.css');   
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');
?>