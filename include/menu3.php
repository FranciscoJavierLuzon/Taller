
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php
              //header('Content-Type: text/html; charset=ISO-8859-1');
              $query="select * from menu_administrador";
              $result=mysql_query($query) or die("error".mysql_error());
              while ($row=mysql_fetch_array($result)) {
                if ($row["nivel"]==1 and $row["hijos"]==0) {
                  echo "<li><a href=".$row['link'].">".$row['nombre_menu']."</a></li>";
                }
              }

               ?>
          </ul>
        </div>