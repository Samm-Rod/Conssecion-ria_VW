<?php 

    include_once('/xampp/htdocs/concessionariaVW/connection.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Cliente_db/ClienteDAO.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Model/Cliente.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $dNasc = $_POST['dNasc'];
    $cpf = $_POST['cpf'];

    $cliente = new Cliente();
    $cliente->id = $id;
    $cliente->nome = $nome;
    $cliente->dNasc = $dNasc;
    $cliente->cpf = $cpf;

    $result = UpdateCliente($conn,$cliente);

    session_start();

    if($result){
        $_SESSION['Warning'] = "Cliente $nome altualizado com sucesso";
    }else{
        $_SESSION['error'] = "Não foi possível atualizar cliente $nome";
    }

    header('Location: http://localhost/concessionariaVW/cliente/formUpdate_cliente.php');



?>