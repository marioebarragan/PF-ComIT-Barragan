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
	<title>Listado de Inscriptos</title>
</head>

<body>
<?php $f = 3; include("inc/encabezado.php");  ?>
<div class="cuerpo">
<div id="contenido">
<?php 
	    include("conn.php");
		$consulta = "SELECT r.Apellido as Apellido, r.Nombre as Nombre, t.Nombre as Remera, a.Nombre as Agrupación, d.Nombre as Distancia, e.Lugar as Evento, p.Nombre as MEDIO_PAGO
					FROM tblinscripciones I 
					INNER JOIN tbleventos E on E.ID = I.IDEventos
					INNER JOIN tbldistancia D on D.ID = I.IDDistancia
					INNER JOIN tblpago P on P.ID = I.IDPago
					INNER JOIN tblregistro R on R.ID = I.IDRegistro
					INNER JOIN tbltalle T on T.ID = R.IDTalle
					INNER JOIN tblagrupaciones A on A.ID = R.IDAgrupacion";
		$result = mysql_query($consulta);		
		
		echo "<table cellpadding='6' border='1' id='myTable' class='table table-striped'>";
		echo "<thead><tr><th>Apellido</th><th>Nombre</th><th>Talle</th><th>Agrupaci&oacuten</th><th>Distancia</th><th>Lugar</th><th>Forma de Pago</th></tr></thead><tbody>";
		while ($evento=mysql_fetch_assoc($result)){
		echo "<tr><td>".$evento['Apellido']."</td><td>".$evento['Nombre']."</td><td>".$evento['Remera']."</td><td>".$evento['Agrupación']."</td><td>".$evento['Distancia']."</td><td>".$evento['Evento']."</td><td>".$evento['MEDIO_PAGO']."</td></tr>"; 	
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