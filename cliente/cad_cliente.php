<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send form cliente</title>
</head>
<body>
    <?php 
    
        $nome = $_POST['nome'];
        $dNasc = $_POST['dNasc'];
        $cpf = $_POST['cpf'];
        
        $sql = "INSERT INTO tb_cliente (nome, dNasc, cpf) VALUES ('$nome','$dNasc','$cpf')";
        $conn = mysqli_connect("localhost","root","","db_concessionaria");

        if(mysqli_connect_error()){
            die("Not found DB db_concessionaria! ".mysqli_connect_error());
        }
        mysqli_query($conn,$sql);
        echo"<center><h2>Succesfuly connection with DB db_concessionaria</h2></center>";
        mysqli_close($conn);
    ?>
    <center><h2><a href="cad_cliente.html">Voltar</a></h2></center>
</body>
</html>