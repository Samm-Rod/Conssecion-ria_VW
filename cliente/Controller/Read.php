<?php 

    include_once('/xampp/htdocs/concessionariaVW/connection.php');
    include_once('/xampp/htdocs/concessionariaVW/cliente/Cliente_db/ClienteDAO.php');

    $clients = listCliente($conn);



?>