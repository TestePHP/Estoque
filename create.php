<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Customer</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Produto</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Produto" value="<?php echo !empty($produto)?$produto:'';?>">
                            <?php if (!empty($produtoError)): ?>
                                <span class="help-inline"><?php echo $produtoError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Cliente</label>
                        <div class="controls">
                            <input name="cliente" type="text" placeholder="Cliente" value="<?php echo !empty($cliente)?$cliente:'';?>">
                            <?php if (!empty($clienteError)): ?>
                                <span class="help-inline"><?php echo $clienteError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                        <label class="control-label">Pedido</label>
                        <div class="controls">
                            <input name="mobile" type="text"  placeholder="Pedido" value="<?php echo !empty($pedido)?$pedido:'';?>">
                            <?php if (!empty($pedidoError)): ?>
                                <span class="help-inline"><?php echo $pedidoError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Criar</button>
                          <a class="btn" href="index.php">Voltar</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
