<?php 
    include_once('/xampp/htdocs/concessionariaVW/connection.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Cliente_db/ClienteDAO.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Model/Cliente.php');

    // Variaveis criadas para receber os dados do formulário
    $nome = $_POST['nome'];
    $dNasc = $_POST['dNasc'];
    $cpf = $_POST['cpf'];

    $cliente = new Cliente();
    $cliente->nome = $nome;
    $cliente->dNasc = $dNasc;
    $cliente->cpf = $cpf;
    
    $result = cadastrarCliente($conn,$cliente);

    session_start();

    if($result){
        $_SESSION['success'] = "Cliente $nome inserido com sucesso";
    }else{
        $_SESSION['error'] = "Não foi possível inserir o cliente $nome";
    }

    header('Location: http://localhost/concessionariaVW/cliente/cad_cliente.html');



?>