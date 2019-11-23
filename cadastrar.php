<?php
    include 'cabecalho.php';
    include 'conexao.php'
?>

<div class="container"><div class="linha"></div></div>
        <div class="container">
         <h2>Cadastrar nova Empresa</h2>
         <form action="cadastro_emp.php" method="post">
           <div class="form-group">
             <label for="cnpj">CNPJ</label>
             <input id="cnpj" name="cnpj" type="text" class="form-control">
           </div>
           <div class="form-group">
             <label for="razao_social">Razão Social</label>
             <input id="razao_social" name="razao_social" type="text" class="form-control">
           </div>
           <div class="form-group">
             <label for="endereco">Endereço</label>
             <input id="endereco" name="endereco" type="text" class="form-control">
           </div>
           <div class="form-group">
             <label for="telefone">Telefone</label>
             <input id="telefone" name="telefone" type="number" class="form-control">
           </div>
           <button type="submit" class="btn btn-primary">Cadastrar</button>
         </form>
        </div>

        <?php
        include 'footer.php'
        
        ?>