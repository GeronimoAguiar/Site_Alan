<?php 
   include('conexao.php');

   $cnpj = $_POST['cnpj'];
   $razao_social = $_POST['razao_social'];
   $endereco = $_POST['endereco'];
   $telefone = $_POST['telefone'];

    $result_cliente = mysqli_query($con,"UPDATE empresa SET cnpj='$cnpj', razao_social ='$razao_social', endereco='$endereco', telefone='$telefone' WHERE cnpj = '$cnpj' ");
    header('location:index.php');
?>