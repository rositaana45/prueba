<?php

$idMemorandum = $_REQUEST['idmen'];
//$idMemorandum="hola";
require_once('../lib/pdf/mpdf.php');
include_once('../entidad/conexion.php');




$html = ' <header class="clearfix">
      <div id="logo">
        <img src="../img/logo1mpdf.png" width="10%">
      </div>
      <h1>MEMORANDUM</h1>
      
  

     <td >'.$idMemorandum.'</td>
      <div id="project">
        <div> Memorando-003 </div>
        <div>Para:   Carlos Villanueva Fuentes </div>
        <div>De:      Remberto Suárez Arteaga </div>
        <div>Asunto: Despido </div>
        <br>
         <br>
          <br>
           <br>
            <br>
             <br>
        <div>Debido a las quejas en repetidas ocasiones por su falta de pertinencia y entrega a su labor,</div>
        <div> por motivo de    la gerencia le informa de la manera mas cordial que si ud no cambiar</div>
        <div>  su actuar y su rendimiento laboral actual  se vera sujeto a sanciones mas drásticas . atte  gerencia</div>
         <div>  Gracias por la atención prestada. </div>
          <br>
         <br>
          <br>
           <br>
            <br>
             <br>
              <br>
         <br>
          <br>
           <br>
            <br>
             <br>
              <br>
         <br>
          <br>
           <br>
            <br>
             <br>
<div class="center">  
      <div>   Remberto Suárez Arteaga  </div>
           <div>   GERENTE GENERAL  </div>   
</div>  

      </div>
    </header>
    <main>
      <table >
        <thead>
          
        </thead>
        <tbody>';
 
        $html.= ' 

        </tbody>
      </table>
      
    </main>';
$mpdf=new mPDF('c','A4');
$css=file_get_contents('../bootstrap/css/style1mpdf.css');   
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');


?>