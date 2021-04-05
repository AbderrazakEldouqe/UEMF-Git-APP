<?php
    require 'database.php';
    $db=database::connect();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container admin">
    	<div class="row">
        <table class="table table-striped table-bordered">
             	<thead>
             		<tr>
             			<th>titre</th>
             		</tr>
             	</thead>
             	<tbody>
                 <?php
                    $result = $db->query("SELECT titre FROM matiere");
                    while ($item=$result->fetch()) 
                    {
                        echo "<tr>";
                        echo'<td>'.$item["titre"].'</td>';
                        echo "</tr>";
                    }
                    
                ?>
                </tbody>
        </table>
       </div>
</div>
</body>
</html>
<?php
  Database::disconnect();
?>