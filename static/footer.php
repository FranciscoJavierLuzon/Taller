<footer>
	<?php
		$query="select * from bloques where estado='1' and posicion= 'pie'";
            $result=mysql_query($query) or die("error".mysql_error());
            while ($row=mysql_fetch_array($result)) {
              echo "".$row['nombre']."<br>";
              echo "".$row['descripcion']."<br>";
            }
	?>
	<h6>Drechos Reservados | <?php echo $site_autor;?></h6>
</footer>