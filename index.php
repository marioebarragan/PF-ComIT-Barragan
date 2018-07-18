<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="css/estilo_.css">
	<script>
	$(document).ready(function() {
		$("#img01").mouseenter(function(){
			$("#img01").fadeOut(1000,function(){;
		});
			$("#img01").fadeIn(1000,function(){;
		});
		});
		///
		$("#img02").mouseenter(function(){
		$("#img02").fadeOut(1000,function(){;
		});
			$("#img02").fadeIn(1000,function(){;
		});
		});
	    ///
		$("#img03").mouseenter(function(){
		$("#img03").fadeOut(1000,function(){;
		});
			$("#img03").fadeIn(1000,function(){;
		});
		});
		$("#img05").mouseenter(function(){
		$("#img05").fadeOut(1000,function(){;
		});
			$("#img05").fadeIn(1000,function(){;
		});
		});
		///
		$("#img06").mouseenter(function(){
		$("#img06").fadeOut(1000,function(){;
		});
			$("#img06").fadeIn(1000,function(){;
		});
		});
		///
		$("#img04").mouseenter(function(){
		$("#img04").fadeOut(1000,function(){;
		});
			$("#img04").fadeIn(1000,function(){;
		});
		});
	});
	</script>
	<style>
	div.galeria {
		margin: 5px;
		border: 1px solid #ccc;
		float: left;
		width: 180px;
	}
	div.galeria:hover {
		border: 1px solid #777;
	}
	div.galeria img {
		width: 100%;
		height: auto;
	}
	div.desc {
		padding: 15px;
		text-align: center;
	}
	</style>
	<title>Home</title>
</head>
<body>
<?php $f = 5; 
include("inc/encabezado.php");  
?>

<div class="container">
  <h2>Somos RUN! Bahía</h2>
  <div class="well well-lg">El portal bahiense con las últimas carreras en la ciudad y la zona, te invitamos a inscribirte al evento que mas te guste.</div>
  <div class="well well-lg">¿Sabías que al correr liberamos endorfinas que nos ayudan a aluchar contra la depresión? Además, nos ayuda a relajarnos, a la vez que eliminamos el estrés y conseguimos un adecuado descanso nocturno.</div>
  

<div class="galeria">
  <a target="_blank" href="../runbahia/img/03.jpg">
    <img id="img03" src="../runbahia/img/03.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Ironman Buenos Aires 2018</div>
</div>
  
<div class="galeria">
  <a target="_blank" href="../runbahia/img/01.jpg">
    <img id="img01" src="../runbahia/img/01.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Llao Llao 21K Bariloche</div>
</div>

<div class="galeria">
  <a target="_blank" href="../runbahia/img/02.jpg">
    <img id="img02" src="../runbahia/img/02.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">42K Aniversario Bariloche</div>
</div>

<div class="galeria">
  <a target="_blank" href="../runbahia/img/06.jpg">
    <img id="img06" src="../runbahia/img/06.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Ironman Mar del Plata 2018</div>
</div>

<div class="galeria">
  <a target="_blank" href="../runbahia/img/04.jpg">
    <img id="img04" src="../runbahia/img/04.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">21K Asoc. Atletismo Bahiense</div>
</div>

<div class="galeria">
  <a target="_blank" href="../runbahia/img/05.jpg">
    <img id="img05" src="../runbahia/img/05.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">10K Nativa Bahía Blanca</div>
</div>

</div> 
<?php include("inc/pie.php"); ?>
</body>
</html>

