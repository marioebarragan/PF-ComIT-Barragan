<?php 
$sep = " &nbsp;&nbsp; <strong>&middot;</strong> &nbsp;&nbsp; ";
?>
<nav>
<ul>
	<?php 
	echo ($f==5) ? '<li class="inactivo">Home</li>' : '<li><a href="index.php">Home</a></li>'; 
	echo ($f==1) ? '<li class="inactivo">Formulario<br>de registro</li>' : '<li><a href="registro.php">Formulario<br>de registro</a></li>'; 
	echo ($f==2) ? '<li class="inactivo">Carreras<br>disponibles</li>' : '<li><a href="consultar.php">Carreras<br>disponibles</a></li>'; 
	echo ($f==3) ? '<li class="inactivo">Inscriptos</li>' : '<li><a href="listadosinscriptos.php">Inscriptos</a></li>'; 
	//echo ($f==4) ? '<li class="inactivo">Salir</li>' : '<li><a href="salir.php">Salir</a></li>'; 
	?>
</ul>    
</nav>