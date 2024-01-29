<?php
session_start();
ob_start();
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
    if (isset($_SESSION['imprimir'])) {
      
    }else{
      header("location: libreta.php");
    }
?>
<?php
 
?>

<html>
  <head>
    <title>Impreciones info</title>
  </head>
  <style>
      #contenedor {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position:relative;
}

#contenedor > div {
  width: 50%;
}
  </style>
<body style="background: #fcfcfc;">  

<div id="contenedor">
  <div>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAM3RFWHRDb21tZW50AHhyOmQ6REFGVmY2MWk2bW86NCxqOjQ0MDYxNDE5MjMxLHQ6MjIxMjIyMTVenMfzAAAE+WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8eDp4bXBtZXRhIHhtbG5zOng9J2Fkb2JlOm5zOm1ldGEvJz4KICAgICAgICA8cmRmOlJERiB4bWxuczpyZGY9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMnPgoKICAgICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0nJwogICAgICAgIHhtbG5zOmRjPSdodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyc+CiAgICAgICAgPGRjOnRpdGxlPgogICAgICAgIDxyZGY6QWx0PgogICAgICAgIDxyZGY6bGkgeG1sOmxhbmc9J3gtZGVmYXVsdCc+bWluaSAtIDE8L3JkZjpsaT4KICAgICAgICA8L3JkZjpBbHQ+CiAgICAgICAgPC9kYzp0aXRsZT4KICAgICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KCiAgICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICAgICAgICB4bWxuczpBdHRyaWI9J2h0dHA6Ly9ucy5hdHRyaWJ1dGlvbi5jb20vYWRzLzEuMC8nPgogICAgICAgIDxBdHRyaWI6QWRzPgogICAgICAgIDxyZGY6U2VxPgogICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0nUmVzb3VyY2UnPgogICAgICAgIDxBdHRyaWI6Q3JlYXRlZD4yMDIyLTEyLTIyPC9BdHRyaWI6Q3JlYXRlZD4KICAgICAgICA8QXR0cmliOkV4dElkPjU1YjQwNDlkLWQ1ZWItNDE3MC1hYTE5LWY1MTliNjg0MWY3NTwvQXR0cmliOkV4dElkPgogICAgICAgIDxBdHRyaWI6RmJJZD41MjUyNjU5MTQxNzk1ODA8L0F0dHJpYjpGYklkPgogICAgICAgIDxBdHRyaWI6VG91Y2hUeXBlPjI8L0F0dHJpYjpUb3VjaFR5cGU+CiAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgPC9yZGY6U2VxPgogICAgICAgIDwvQXR0cmliOkFkcz4KICAgICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KCiAgICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICAgICAgICB4bWxuczpwZGY9J2h0dHA6Ly9ucy5hZG9iZS5jb20vcGRmLzEuMy8nPgogICAgICAgIDxwZGY6QXV0aG9yPkZyYW5jaXNjbyBHb256YWxlejwvcGRmOkF1dGhvcj4KICAgICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KCiAgICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICAgICAgICB4bWxuczp4bXA9J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8nPgogICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+Q2FudmE8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgICAgICA8L3JkZjpSREY+CiAgICAgICAgPC94OnhtcG1ldGE+MibBugAATXRJREFUeJzs3XuUVPWBJ/DvvXXr2V39bqAfSCutaIPPgAGT06iJaXWS6GSEHfMwEyV7dMzknAFnJ2dzkmBmZ9dsVshuTqKZgfFIZtY5ILtsZgZoT0yEJGJsMsbwEgGhabqh6Xe9H/exf1RXdVXXvbduFd1VRfn9nOPBunXr3l+12N/7ewur92oaiIiI6KomlroAREREdOUY6ERERBWAgU5ERFQBGOhEREQVgIFORERUARjoREREFYCBTkREVAEY6ERERBWAgU5ERFQBGOhEREQVgIFORERUARjoREREFYCBTkREVAEY6ERERBWAgU5ERFQBGOhEREQVgIFORERUARjoREREFYCBTkREVAEY6ERERBWAgU5ERFQBGOhEREQVgIFORERUARjoREREFYCBTkREVAEY6ERERBWAgU5ERFQBGOhEREQVgIFORERUARjoREREFYCBTkREVAEY6ERERBWAgU5ERFQBGOhEREQVgIFORERUARjoREREFYCBTkREVAEY6ERERBWAgU5E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0pqv9eL6PGV5bA1gm1oDgzsevhJrDOwaiujhDyHUw8gdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASEDQASABQQeABAQdABIQdABIQNABIAFBB4AEBB0AEhB0AEhA0AEgAUEHgAQEHQASEHQASOD/Z3nF9ubdAUkAAAAASUVORK5CYII=
" style="width: 30%;
    border-radius: 228px;
    box-shadow: 0px 0px 11px 0px #38b6ff;" alt=""> 
  </div>
  <div>
    <h4 style="padding:2%;top:0%;right:0%;position:absolute;text-align: right;
    color: white;
    background: #38b6ff;
    border-radius: 5px;">FECHA <?php echo date("d-m-Y")?></h4>
  </div>
</div>

  
  
  <div>
           <h2 style="    text-align: center;
    background: #38b6ff;
    color: white;
    border-radius: 5px;"><?php echo "LIBRETA ".$_SESSION['imprimir'][0]['nombreFamilia']?></h2>
         </div>
    <div>
      <hr>
     
     

    </div>
    <div>
      <table style="width:100%;" border="1" CELLPADDING=10 CELLSPACING=0>
          <thead style="    background: #38b6ff;
    color: white;">
              <tr>
                  <th>Nombre</th>
                  <th>Articulo</th>
                  <th>Cantidad</th>
                  <th>Fecha Hora</th>
                  <th>Sub total</th>
        <!--           <th>Hora de consulta</th> -->
              </tr>
          </thead>
        <tbody>
          <?php $total=0; foreach ($_SESSION['imprimir'] as $key):$total+=$key['cantidad']*$key['precio'];?>
          <tr>
            <td style="padding: 2px;"><?php echo $key['nombre']?></td>
            <td style="padding: 2px;"><?php echo strtoupper($key['nombreArticulo'])?></td>
            <td style="padding: 2px;"><?php echo intval($key['cantidad'])?></td>
            <td style="padding: 2px;"><?php echo $key['fecha']?></td>
            <td style="padding: 2px;"><?php echo "$".number_format($key['cantidad']*$key['precio'])?></td>
          </tr>
          <?php endforeach?>
          <tr>
            <td colspan="4" style="padding: 2px;">TOTAL</td>
            <td><?php echo "$".number_format($total);?></td>
          </tr>
          <tr>
            <td colspan="4" style="padding: 2px;">ENTREGO</td>
            <td><?php echo "$".number_format($_SESSION['imprimir'][0]['credito']);?></td>
          </tr>
          <tr>
            <td colspan="4" style="padding: 2px;">FALTA PAGAR</td>
            <td><?php echo "$".number_format($total-$_SESSION['imprimir'][0]['credito']);?></td>
          </tr>
        </tbody>
         
      </table>
    </div>
          
</body>
</html>
<?php
$dompdf = new Dompdf();
$dompdf->loadHtml(ob_get_clean());
$dompdf->setPaper('A4', 'portrait'); // (Opcional) Configurar papel y orientaci車n
$dompdf->render(); // Generar el PDF desde contenido HTML
$pdf = $dompdf->output();// Obtener el PDF generado
$date=$_SESSION['imprimir'][0]['nombreFamilia']." ".date("d-m-Y");
$dompdf->stream($date,array("Attachment" => false));
?>