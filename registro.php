<?php
$existe = false;
function comprobar_email($email) {
return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}
function comprobar_numero($numero){
	return (filter_var($numero, FILTER_VALIDATE_INT)) ? 1 : 0; 
}
	
$Apellido = $Nombre = $Tipo_Doc = $Num_Doc = $Sexo = $IDTalle = $Telefono = $Domicilio = $IDProvincia = $IDLocalidad = $FechaNacimiento = $IDDiscapacidad = $IDAgrupacion = $email = "";
$ApellidoErr = $NombreErr = $Tipo_DocErr = $Num_DocErr = $SexoErr = $IDTalleErr = $TelefonoErr = $DomicilioErr = $IDProvinciaErr = $IDLocalidadErr = $FechaNacimientoErr = $IDDiscapacidadErr = $IDAgrupacionErr = $emailErr = "";

$ok = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ\s]+$/";

    if (empty($_POST["Nombre"])) {
    $NombreErr = "Por favor complete este campo.";
	$ok = false;
    } else {	 
 		 if (preg_match($patron_texto, $_POST["Nombre"])) {
			$Nombre = test_input($_POST["Nombre"]); 
		   } else {
			$NombreErr = "El nombre sólo puede contener letras y espacios";
			$ok = false;	
			      }
		  }

	if (empty($_POST["Apellido"])) {
    $ApellidoErr = "Por favor complete este campo.";
	$ok = false;
    } else {
		if (preg_match($patron_texto, $_POST["Apellido"])) {
		    $Apellido = test_input($_POST["Apellido"]);
		} else {
			$ApellidoErr = "El apellido sólo puede contener letras y espacios";
			$ok = false;
		}
    }
  
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
        
	if (empty($_POST["Sexo"])) {
    $SexoErr = "Por favor complete este campo.";
	$ok = false;
    } else {
	      $Sexo = test_input($_POST["Sexo"]);
	}
	
    if (empty($_POST["IDTalle"])) {
    $IDTalleErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $IDTalle = test_input($_POST["IDTalle"]);
	}
	
	if (empty($_POST["Telefono"])) {
    $TelefonoErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $Telefono = test_input($_POST["Telefono"]);
	}
  		
    if (empty($_POST["Domicilio"])) {
    $DomicilioErr = "Por favor complete este campo.";
	$ok = false;
    } else {
	      $Domicilio = test_input($_POST["Domicilio"]);
		}
    
	if (empty($_POST["IDProvincia"])) {
    $IDProvinciaErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $IDProvincia = test_input($_POST["IDProvincia"]);
	}
      
	if (empty($_POST["IDLocalidad"])) {
    $IDLocalidadErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $IDLocalidad = test_input($_POST["IDLocalidad"]);
	}
     
	$FechaNacimiento = test_input($_POST["FechaNacimiento"]); 
	
	if (empty($_POST["IDDiscapacidad"])) {
    $IDDiscapacidadErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $IDDiscapacidad = test_input($_POST["IDDiscapacidad"]);
	}
    
	if (empty($_POST["IDAgrupacion"])) {
    $IDAgrupacionErr = "Por favor complete este campo.";
	$ok = false;
	} else {
    $IDAgrupacion = test_input($_POST["IDAgrupacion"]);
	}
    	
    if (empty($_POST["email"])) {
    $emailErr = "Por favor complete este campo.";
	$ok = false;
	} else {
       if (isset($_POST['email'])) {
       if (!comprobar_email($_POST["email"])) {
        $emailErr = "El email introducido NO es correcto!";	
       } else {
      	$email = test_input($_POST["email"]);
       }
      }
	}
	
  if ($ok) {
	include "conn.php";
	$consulta = "SELECT count(*) as existe FROM tblregistro where NroDoc = "."'".$Num_Doc."'";
	$result = mysql_query($consulta);
	$row =  mysql_fetch_assoc($result);
	if ($row['existe']>0) {
		$existe = true;
	} else {
		$consulta = "INSERT INTO tblregistro (`Apellido`, `Nombre`, `IDTipoDoc`, `NroDoc`, `Sexo`, `IDTalle`, `Telefono`, `Domicilio`, `IDProvincia`, `IDLocalidad`, `FechaNacimiento`, `IDDiscapacidad`, `IDAgrupacion`, `Email`) VALUES (";	
		$consulta .= "'".$Apellido."',";
		$consulta .= "'".$Nombre."',";
		$consulta .= "'".$Tipo_Doc."',"; 
		$consulta .= "'".$Num_Doc."',"; 
		$consulta .= "'".$Sexo."',"; 
		$consulta .= "'".$IDTalle."',"; 
		$consulta .= "'".$Telefono."',";
		$consulta .= "'".$Domicilio."',"; 
		$consulta .= "'".$IDProvincia."',"; 
		$consulta .= "'".$IDLocalidad."',"; 
		$consulta .= "'".$FechaNacimiento."',"; 
		$consulta .= "'".$IDDiscapacidad."',"; 
		$consulta .= "'".$IDAgrupacion."',"; 
		$consulta .= "'".$email."'";
		$consulta .= ");";
		$result = mysql_query($consulta);
		$consulta = "SELECT ID as ident FROM tblregistro where NroDoc = "."'".$Num_Doc."'";
		$result = mysql_query($consulta);
		echo "<script type=\"text/javascript\">alert(\"¡Registrado exitosamente!\");</script>";
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
	<link type="text/css" rel="stylesheet" href="css/estilo_.css">
	<title>Formulario de Registro</title>
</head>
<body>
<?php $f = 1; 
include("inc/encabezado.php");  
?>
<div class="cuerpo">
<div id="contenido">
	<h2>Agregar nuevo registro | <strong>Formulario de Registro</strong></h2>
<?php 
if (!$existe){
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p><span class="error">* Requiere campo completo.</span></p>
  <p></p>

  <table id="formulario">

  <tr><td class="etiqueta">Nombre</td><td> <input type="text" name="Nombre" required value="<?php echo (isset($_POST["Nombre"])) ? $_POST["Nombre"]:"";?>">
  <span class="error">* <?php echo $NombreErr;?></span>
  </td></tr>

  <tr><td class="etiqueta">Apellido</td><td> <input type="text" name="Apellido" required value="<?php echo (isset($_POST["Apellido"])) ? $_POST["Apellido"]:"";?>">
  <span class="error">* <?php echo $ApellidoErr;?></span>
  </td></tr>
  
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
  
  <tr><td class="etiqueta">Sexo</td><td>
  <select name="Sexo" required>
	<option value="-">-</option>
	<option value="F">Femenino</option>
	<option value="M">Masculino</option>
  </select>
  </td></tr>
      
  <tr><td class="etiqueta">Talle de remera</td><td> <select name="IDTalle" id="IDTalle" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tbltalle ORDER BY Nombre";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDTalle"]) && $_POST["IDTalle"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $Tipo_DocErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">Teléfono</td><td>  <input type="text" name="Telefono" required value="<?php echo (isset($_POST["Telefono"])) ? $_POST["Telefono"]:"";?>">
  <span class="error">* <?php echo $TelefonoErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">Domicilio</td><td> <input type="text" name="Domicilio" required value="<?php echo (isset($_POST["Domicilio"])) ? $_POST["Domicilio"]:"";?>">
  <span class="error">* <?php echo $DomicilioErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">Provincia</td><td> <select name="IDProvincia" id="IDProvincia" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tblprovincias ORDER BY Nombre";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDProvincia"]) && $_POST["IDProvincia"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $IDProvinciaErr;?></span>
  </td></tr>
    
  <tr><td class="etiqueta">Ciudad</td><td> <select name="IDLocalidad" id="IDLocalidad" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tblciudad ORDER BY Nombre";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDLocalidad"]) && $_POST["IDLocalidad"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $IDProvinciaErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">Fecha de Nacimiento</td><td><input type="date" name="FechaNacimiento" required value="<?php echo (isset($_POST["FechaNacimiento"])) ? $_POST["FechaNacimiento"]:"";?>">
  </td></tr>
   
  <tr><td class="etiqueta">E-mail</td><td>  <input type="mail" name="email" id="email" required value="<?php echo (isset($_POST["email"])) ? $_POST["email"]:"";?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">¿Posee alguna discapacidad?</td><td> <select name="IDDiscapacidad" id="IDDiscapacidad" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tbldiscapacidad ORDER BY ID";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDDiscapacidad"]) && $_POST["IDDiscapacidad"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $IDDiscapacidadErr;?></span>
  </td></tr>
  
  <tr><td class="etiqueta">¿Forma parte de alguna agrupación??</td><td> <select name="IDAgrupacion" id="IDAgrupacion" required>
                     <?php 
					  include "conn.php";
                      $consulta = "SELECT Nombre, ID FROM tblagrupaciones ORDER BY ID";
					  $result = mysql_query($consulta);
					  while ($row =  mysql_fetch_assoc($result)){	  
						  echo '<option value="'.$row['ID'].'" ';
						  echo (isset($_POST["IDAgrupacion"]) && $_POST["IDAgrupacion"]==$row['ID']) ? 'selected="selected" ' : '';
						  echo '>'.$row['Nombre'].'</option>';
					  }
                     ?>
  </select> 
  <span class="error">* <?php echo $IDAgrupacionErr;?></span>
  </td></tr>
  
  <tr><td  ></td><td  ><input type="submit" name="submit" value="Grabar datos"></td></tr>
  </table>
</form>

<?php 
} else {
	//echo "<script type=\"text/javascript\">alert(\"Existe un registro bajo ese número de documento.\");</script>";
	echo "<p class='error'>Existe un registro bajo ese número de documento.</p>";
}
?>
</div>
</div>
<?php 
include("inc/pie.php");  
?>
</body>
</html>