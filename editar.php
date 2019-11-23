<?php 
    $cnpj = $_GET['cnpj'];
    include('conexao.php');
    /*$con      = mysqli_connect("127.0.0.1:3306","root","1234","emp");*/
    $result_cliente = mysqli_query($con,"SELECT * FROM empresa WHERE cnpj = '$cnpj'");
    $dado = $result_cliente->fetch_array();
    include 'cabecalho.php';
?>

<div class="container"><div class="linha"></div></div>
        <div class="container">
         <h2>Editar Empresa</h2>
         <form action="editar_db.php" method="post">
           <div class="form-group">
             <label for="cnpj">CNPJ</label>
             <input id="cnpj" name="cnpj" type="text" class="form-control" value="<?php echo $dado['cnpj'];?>">
           </div>
           <div class="form-group">
             <label for="razao_social">Razão Social</label>
             <input id="razao_social" name="razao_social" type="text" class="form-control" value="<?php echo $dado['razao_social'];?>">
           </div>
           <div class="form-group">
             <label for="endereco">Endereço</label>
             <input id="endereco" name="endereco" type="text" class="form-control" value="<?php echo $dado['endereco'];?>">
           </div>
           <div class="form-group">
             <label for="telefone">Telefone</label>
             <input id="telefone" name="telefone" type="number" class="form-control" value="<?php echo $dado['telefone'];?>">
           </div>
           <button type="submit" class="btn btn-primary">Editar</button>
         </form>
        </div>

        <?php
          include 'footer.php';
        ?>