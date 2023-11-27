<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formUpdate_veiculo.css">
    <title>Alterar dados do Veículo</title>
</head>
<body>
<header>
    <h2><a href="../index.html"><img src="../imagem/icons8-vw-100.png" alt="VolksWagen icon" ></a></h2>
        <ul>
            <li><a href="cad_veiculo.html">Veículos</a></li>
            <li><a href="../cliente/cad_cliente.html">Clientes</a></li>
            <li><a href="../peças/cad_peca.html">Peças</a></li>
        </ul>
    </header>
    <?php
        include_once('/xampp/htdocs/concessionariaVW/connection.php');
        $id = $_POST['id'];

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($conn, "SELECT * FROM tb_veiculo WHERE id='$id'");

    ?>

    <p>
    <center>
        <form action="update_veiculo.php" method="post">
            <h2>Update veículo</h2>
            <?php while ($row = mysqli_fetch_array($result)) { ?>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <label for="nome">Modelo:</label>
                <label><input type="text" placeholder="Modelo" name="modelo" value="<?php echo $row['modelo']; ?>" /> </label>
                <label for="nome">Cor:</label>
                <label><input type="text" placeholder="Cor" name="cor" value="<?php echo $row['cor']; ?>" /> </label>
                <label for="nome">Valor:</label>
                <label><input type="text" placeholder="Valor" name="valor" value="<?php echo $row['valor']; ?>" /> </label>
                <button type="submit" name="enviar" value="ok"> Alterar </button>

            <?php } ?>

        </form>
    </center>
    </p>
    <footer>
        <small>
        Copyright © 2023 Concessionária VolksWagen CRUD.
        </small>
    </footer>
</body>
</html>
