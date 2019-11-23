<?php 
    // session_start inicia a sessão
    session_start();

    include('conexao.php');

    $cnpj = $_POST['cnpj'];
    $razao_social = $_POST['razao_social'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    
    /*$con = mysqli_connect("127.0.0.1:3306","root","123456789","emp");*/

    $result_cliente = mysqli_query($con,"INSERT INTO empresa(cnpj,razao_social,endereco,telefone) VALUES ('$cnpj','$razao_social','$endereco','$telefone')");
    header('location:index.php');

    
?>