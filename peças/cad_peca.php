<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Form curso</title>
</head>
<body>
    <?php 
        include_once('/xampp/htdocs/concessionariaVW/connection.php');
        $nome = $_POST['nome'];
        $qtd = $_POST['qtd'];
        $valor = $_POST['valor'];
        
        $sql = "INSERT INTO tb_peca (nome, qtd, valor) VALUES ('$nome','$qtd','$valor')";
        
        if(mysqli_connect_error()){
            die("Not found DB db_concessionaria! ".mysqli_connect_error());
        }
        mysqli_query($conn,$sql);
        echo"<center><h2>Peça cadastrada com sucesso !</h2></center>";
        mysqli_close($conn);
    ?>
    <center><h2><a href="cad_peca.html">Voltar</a></h2></center>
</body>
</html>