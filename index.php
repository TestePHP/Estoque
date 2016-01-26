<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Produto</th>
                      <th>Cliente</th>
                      <th>Pedido</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'conexao.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM produto ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['produto'] . '</td>';
                            echo '<td>'. $row['cliente'] . '</td>';
                            echo '<td>'. $row['pedido'] . '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
