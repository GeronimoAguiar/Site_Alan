<?php
  include "cabecalho.php"
?>
  <main role="main">
  
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>    
      
      <div class="carousel-inner">  
        <div class="carousel-item active">
          <img src="logoAlan.png" class="d-block w-100" alt="">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Manutenção de Computadores</h1>
              <p>Realizamos manutenção em cada componente do seu computador por uma preço acessivel para você.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Faça um orçamento</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container" id="c1">
            <div class="carousel-caption">
              <h1>Formatação de computadores</h1>
              <p>Removemos todos os vírus e outros problemas em seu computador.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Faça um orçamento</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Manutenção de eletrodomésticos</h1>
              <p>Realizamos manuteção desde equipemantos simples de uma casa até máquina industriais e hospitalares.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Faça um orçamento</a></p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
    </div>

<!--################################################################################-->

<?php
  include('conexao.php');
  /*$con      = mysqli_connect("127.0.0.1:3306","root","0123456789","emp");*/
  $consulta = "SELECT * FROM produtos";
  $result_cliente = mysqli_query($con,"SELECT * FROM empresa");
    
  // $categoria = mysqli_query($con,"SELECT nome FROM categoria");
  
  // $categorias = $categoria->fetch_array();



?>

    <div class="container">
        <h2>Empresas cadastradas</h2>
          <div class="table-responsive">
              <table class="table table-striped table-bordered">
              <thead>
              <tr>
                  <th>CNPJ</th>
                  <th>Razão Social</th>
                  <th>Endereço</th>
                  <th>Telefone</th>
                  <th>Editar/Excluir</th>
                </tr>
                </thead> 
                <tbody>
                <?php while($dado = $result_cliente->fetch_array()) { ?>
                    <tr>
                      <td><?php echo $dado['cnpj']; ?></td>
                      <td><?php echo $dado['razao_social']; ?></td>
                      <td><?php echo $dado['endereco']; ?></td>
                      <td><?php echo $dado['telefone']; ?></td>
                      <td>
                        <a href="editar.php?cnpj=<?php echo $dado['cnpj']; ?>">Editar</a>
                        <a href="excluir.php?cnpj=<?php echo $dado['cnpj']; ?>">Excluir</a>
                      </td>
                     </tr>
                <?php } ?>
                </tbody>   
              </table>
          </div>
          
        </div>
        
        

<!--################################################################################-->

    <div class="container marketing">
  
      <div class="row">
        <div class="col-lg-4">
          <img src="missao.png" width="140" height="140">
          <h2>Missão</h2>
          <p>Contribuir para um país mais forte por meio de empresas mais fortes, concertando equipamento.</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="valores.png" width="140" height="140">
          <h2>Valor</h2>
          <p>Serem claros e objetivos, permitindo a compreensão de todos.
            Serem públicos para toda a organização, clientes e sociedade.
            Serem obrigatórios, todos os sócios e colaboradores devem seguir à risca.</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="visao.png" width="140" height="140">
          <h2>Visão</h2>
          <p>Ser a melhor empresa de Assistência técnica do Brasil </p>
        </div>
      </div>

  </main>

<?php
  include "footer.php"
?>