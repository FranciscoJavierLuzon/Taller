    <div id="mnf" class="col-xs-12 col-md-12">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php
              header('Content-Type: text/html; charset=ISO-8859-1');
              $query="select * from menu";
              $result=mysql_query($query) or die("error".mysql_error());
              while ($row=mysql_fetch_array($result)) {
                if ($row["nivel"]==1 and $row["hijos"]==0 and $row["posicion"]=="arriba") {
                  echo "<li><a target='_blank' href=".$row['url'].">".$row['nombre_menu']."</a></li>";
                }
                if ($row["nivel"]==1 and $row["hijos"]==1 and $row["posicion"]=="arriba") {
                ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $row['nombre_menu']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <?php 
                      $query1="select * from menu";
                      $result1=mysql_query($query1) or die("error".mysql_error());
                      while ($row1=mysql_fetch_array($result1)) {
                        if ($row1["padre"]==$row["id_menu"] and $row["posicion"]=="arriba") {
                       ?>
                      <li><a  target="_blank" href=<?php echo $row1['url']; ?>><?php echo $row1['nombre_menu']; ?></a></li>
                      <?php } } ?>
                    </ul>
                  </li>
                <?php 
                }
              }

               ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://127.0.0.1/ing_web_2015/web_app4_05_05_2015">Home</a></li>
            <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div>
    </div>