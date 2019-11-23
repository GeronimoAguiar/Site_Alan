<?php
    $cnpj = $_POST['cnpj'];
    include('conexao.php');
    /*$con      = mysqli_connect("127.0.0.1:3306","root","1234","emp");*/
    /*$consulta = "SELECT * FROM empresa";*/
    $result_cliente = $con->query("DELETE FROM empresa WHERE cnpj = '$cnpj'");
    header('location:index.php');
?>