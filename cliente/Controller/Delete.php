<?php 
    include_once('/xampp/htdocs/concessionariaVW/connection.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Model/Cliente.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Cliente_db');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $dNasc = $_POST['dNasc'];
    $cpf = $_POST['cpf'];

    $result = deletaCliente($conn, $cliente);

    session_start();
    
    if($result)
        $_SESSION["warning"] = "Cliente $nome excluído com sucesso";
    else
        $_SESSION["error"] = "Não foi possível excluír o cliente $nome";

    header('Location: http://localhost/concessionariaVW/cliente/cad_cliente.html');
    
?>