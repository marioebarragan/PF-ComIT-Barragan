<?php session_start();?>

<?php function hacerForm($data,$objError){ ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			<input type="hidden" name="Id" value="<?php echo $data["ID"]; ?>">
			<table id="formulario">
				<tr><td class="etiqueta">Evento</td><td> <input type="text" name="Evento" size="100" disabled value="<?php echo (isset($data["Evento"])) ? $data["Evento"]:$data["Nombre"];?>"></td></tr>
				<tr><td  ></td><td  ><input type="submit" name="submit" value="Inscribirme"></td></tr>
			</table>
        </form>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inscripción al evento</title>
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
<link type="text/css" rel="stylesheet" href="css/estilo_.css">
</head>
<body>
<?php $f = 3; 
include("inc/encabezado.php");  
?>
<div class="cuerpo">
<div id="contenido">
<h2>Inscripción al evento</strong></h2>
<?php 
$cmd = isset ($_GET['cmd']);
switch ($cmd) {
	case "bp":
		include ("conn.php");
		$id = $_GET["e"];
		$consulta = "SELECT * FROM tbleventos WHERE ID=$id";
		$result = mysql_query($consulta);
		$row =  mysql_fetch_assoc($result);
		$IDEventos = $row['ID'];
		$_SESSION['IDEvento'] = $IDEventos;
		hacerForm($row,NULL);
	break;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ok = true;
	if ($ok) {
		header("Location: formulario.php");
	}else{
		hacerForm($_POST,$errMsg);
	}
}
?>
</div>
</div>
<?php include("inc/pie.php"); ?>
</body>
</html>