<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Form Veículo</title>
</head>
<body>
    <?php 
    
        $modelo = $_POST['modelo'];
        $cor = $_POST['cor'];
        $valor = $_POST['valor'];
        

        $sql = "INSERT INTO tb_veiculo (modelo, cor, valor) VALUES ('$modelo','$cor','$valor')";
        $conn = mysqli_connect("localhost","root","","db_concessionaria");

        if(mysqli_connect_error()){
            die("Not found DB db_concessionaria! ".mysqli_connect_error());
        }
        mysqli_query($conn,$sql);
        echo"<center><h2>Veículo cadastrado com sucesso !</h2></center>";
        mysqli_close($conn);
    ?>
    <center><h2><a href="cad_veiculo.html">Voltar</a></h2></center>
</body>
</html>