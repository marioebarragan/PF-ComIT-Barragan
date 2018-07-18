<?php session_start();?>

<?php
$existe = false;
function comprobar_numero($numero){
	return (filter_var($numero, FILTER_VALIDATE_INT)) ? 1 : 0; 
}
	
$Tipo_Doc = $Num_Doc = $IDEvento = $IDDistancia = $IDPago = "";
$Tipo_DocErr = $Num_DocErr = $IDEventoErr = $IDDistanciaErr = $IDPagoErr = "";

$ok = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
	if (empty($_POST["Tipo_Doc"])) {
    $Tipo_DocErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $Tipo_Doc = test_input($_POST["Tipo_Doc"]);
	}
 
    if (empty($_POST["Num_Doc"])) {
    $Num_DocErr = "Por favor complete este campo.";
	$ok = false;
    } else {
	  if (!comprobar_numero($_POST["Num_Doc"])) {
			$Num_DocErr = "Debe ingresar un número valido!";	
			$ok = false;
	  }else{
			$Num_Doc = test_input($_POST["Num_Doc"]);
		   }
    }
    
	if (empty($_POST["IDDistancia"])) {
    $IDDistanciaErr = "Por favor complete este campo.";
	$ok = false;
    } else {
	      $IDDistancia = test_input($_POST["IDDistancia"]);
	}
	
    if (empty($_POST["IDPago"])) {
    $IDPagoErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $IDPago = test_input($_POST["IDPago"]);
	}
	
	$IDEvento = $_SESSION["IDEvento"];
	
if ($ok) {
	
	include "conn.php";
	$consulta = "SELECT count(*) as existe FROM tblregistro where NroDoc = "."'".$Num_Doc."'";
	$result = mysql_query($consulta);
	$row =  mysql_fetch_assoc($result);
	if ($row['existe']==0) {
		//header("Location: registro.php");
		echo "<script type=\"text/javascript\">alert(\"Ud. no esta registrado para inscribirse en este evento.\");</script>";  
	} else {
		$consulta = "SELECT ID as ident FROM tblregistro where NroDoc = "."'".$Num_Doc."'";
		$result = mysql_query($consulta);
		$row =  mysql_fetch_assoc($result);
		$IDRegistro = $row['ident'];
		
		// controlar que el IDRegistro no tenga eventos
			$consulta ="SELECT count(*) as existe FROM tblinscripciones WHERE IDRegistro = "."'".$IDRegistro."' and IDEventos = "."'".$IDEvento."'";
			$result = mysql_query($consulta);
			$row =  mysql_fetch_assoc($result);
			if ($row['existe']>=1) {
			//header("Location: registro.php");
			echo "<script type=\"text/javascript\">alert(\"Ud. ya se encuentra registrado en este evento.\");</script>";  
			} else {
	
		
		//var_dump ($consulta);
		
		$consulta = "INSERT INTO tblinscripciones (`IDRegistro`, `IDEventos`, `IDDistancia`, `IDPago`) VALUES (";	
		$consulta .= "'".$IDRegistro."',";
		$consulta .= "'".$IDEvento."',";
		$consulta .= "'".$IDDistancia."',"; 
		$consulta .= "'".$IDPago."'";
		$consulta .= ");";
		$result = mysql_query($consulta);
		echo "<script type=\"text/javascript\">alert(\"¡Registrado exitosamente!\");</script>";
		// se envia mail
		$consulta3 = "SELECT e.Monto AS Monto, e.Nombre as Evento,e.Lugar as Lugar, e.Comienza as Fecha,i.IDRegistro as Registro, R.Email as Mail
					FROM tblinscripciones I
					INNER JOIN tbleventos E on E.ID = I.IDEventos 
					INNER JOIN tblregistro R on R.ID = I.IDRegistro
					WHERE i.IDEventos = "."'".$IDEvento."'";
		$result3 = mysql_query($consulta3);
		$row3 =  mysql_fetch_assoc($result3);
		$to = $row3['Mail'];
		$cabeceras="From: RUN! Bahia Blanca Inscripciones <noresponder@runbahia.com.ar>\r\n";	
		$cabeceras.='Reply-To: noresponder@runbahia.com.ar'."\r\n" .'X-Mailer: PHP/'. phpversion();
		$asunto ="RUN! Bahia Blanca: ¡Registro Exitoso!";
		$mensaje="Ud. se ha registrado en el evento: ".$row3['Evento']." ubicado en: ".$row3['Lugar']." su monto abonar: ".$row3['Monto']." con Fecha de pago: ".$row3['Fecha']."";
		mail ($to,$asunto,$mensaje,$cabeceras);
		}
	}
  };
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = str_replace("'", '"', $data);
  $data = str_replace('&quot', '"',$data);  
  $data = str_replace(";", '', $data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link type="text/css" rel="stylesheet" href="css/estilo_.css">
	<title>Inscripción</title>
</head>
<body>
<?php $f = 4; 
include("inc/encabezado.php");  
?>
<div class="cuerpo">
<div id="contenido">
	<h2>Inscripción | <strong>Eventos</strong></h2>
<?php 
if (!$existe){
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p><span class="error">* Requiere campo completo.</span></p>
  <p></p>

  <table id="formulario">
    
  <tr><td class="etiqueta">Tipo de Documento</td><td> <select name="Tipo_Doc" id="Tipo_Doc" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tbltipodocumento ORDER BY ID";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["Tipo_Doc"]) && $_POST["Tipo_Doc"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $Tipo_DocErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">Número de Documento</td><td>  <input type="number" name="Num_Doc" required value="<?php echo (isset($_POST["Num_Doc"])) ? $_POST["Num_Doc"]:"";?>">
  <span class="error">* <?php echo $Num_DocErr;?></span>
  </td></tr>
    
  <tr><td class="etiqueta">Distancia</td><td> <select name="IDDistancia" id="IDDistancia" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tbldistancia ORDER BY Nombre";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDDistancia"]) && $_POST["IDDistancia"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $IDDistanciaErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">¿Forma de pago?</td><td> <select name="IDPago" id="IDPago" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tblpago ORDER BY ID";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDPago"]) && $_POST["IDPago"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $IDPagoErr;?></span>
  </td></tr>
  
  <tr><td  ></td><td  ><input type="submit" name="submit" value="Confirmar inscripción"></td></tr>
  
  </table>
</form>

<?php 
} else {
	echo "<script type=\"text/javascript\">alert(\"Existe un registro bajo ese número de documento.\");</script>";
}
?>
</div>
</div>
<?php include("inc/pie.php"); ?>
</body>
</html>