<!--?php include ("bloqueDeSeguridad.php");  ?-->
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"> 

	<script type="text/javascript" language="javascript" src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" language="javascript" src="js/jquery-ui.js"></script>

	<link type="text/css" href="css/slimpicker.css" rel="stylesheet">
	
	<script type="text/javascript">
		function DibujarTabla (){
		$('#myTable').dataTable(
                  {language: {
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "Buscar:",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
                               },
                  "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                               }
                  }},
                  {"order": [[ 1, "desc" ]]}
				  
			); 
		};
	</script>
		
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="css/estilo_.css">
	
<style type="text/css">
	table {border-collapse:collapse}
	tr:nth-child(odd) {
	background-color: #f0f0f0;}
	th { background-color:#51cbc0; color: white}
	td,th {padding:3px 6px; margin:0px}
	th.uno, td.uno {border-left:2px solid #B0B0B0}
	th.dos, td.dos {border-right:2px solid #B0B0B0}
</style>

<title>Carreras Disponibles</title>
</head>

<body>
<?php $f = 2; include("inc/encabezado.php");  ?>
<div class="cuerpo">
<div id="contenido">
<?php 
	    include("conn.php");
		$consulta = "SELECT E.ID, D.Nombre AS Diciplina, E.Nombre as Evento, e.Lugar as Lugar, e.Comienza as Fecha FROM tbleventos E INNER JOIN tbldiciplina D ON E.IDDiciplina = D.ID ORDER BY Fecha";
		$result = mysql_query($consulta);		
		
		echo "<table cellpadding='6' border='1' id='myTable' class='table table-striped'>";
		echo "<thead><tr><th>Diciplina</th><th>Evento</th><th>Fecha</th><th class='uno'>Acciones</th></tr></thead><tbody>";
		while ($evento=mysql_fetch_assoc($result)){
		echo "<tr><td>".$evento['Diciplina']."</td><td>".$evento['Evento']."</td><td>".date("d-m-Y", strtotime($evento['Fecha']))."</td><td class='uno'><a href='inscribirme.php?cmd=bp&e=".$evento['ID']."'>Inscribirme</a></td></tr>"; 	
		}
		echo "</tbody></table>";
		echo "<script>";
		echo "DibujarTabla();";
		echo "</script>";
?>
</div>
</div>
<?php include("inc/pie.php"); ?>
</body>
</html>