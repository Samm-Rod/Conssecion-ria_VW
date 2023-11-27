<?php 

    function cadastrarCliente($conn, $cliente){
        $sql = "INSERT INTO tb_cliente(nome,dNasc,cpf) 
                VALUES('$cliente->nome','$cliente->dNasc','$cliente->cpf')";
            $result = mysqli_query($conn, $sql);

        return $result;
    }

    function listCliente($conn){
        $cliente = array();
        $sql = "SELECT * FROM tb_cliente";
        $result = mysqli_query($conn,$sql);

        while($e = mysqli_fetch_assoc($result)){
            array_push($cliente, $e);
        }
        return $cliente;
    }

    function listById($conn,$cliente){
        $sql = "SELECT FROM tb_cliente WHERE id = $cliente->id";
        $result = mysqli_query($conn, $sql);
        $cliente = mysqli_fetch_assoc($result);
        return $cliente;

    }

    function UpdateCliente($conn,$cliente){
        $sql = "UPDATE tb_cliente SET nome='{$cliente->nome}',dNasc='{$cliente->dNasc}',cpf='{$cliente->cpf}' WHERE id='{$cliente->id}';";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    function deletaCliente($conn, $cliente){
        $sql = "DELETE FROM tb_cliente WHERE id= $cliente->id";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

?>