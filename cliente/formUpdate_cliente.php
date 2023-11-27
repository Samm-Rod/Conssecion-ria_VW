<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formUpdate_cliente.css">
    <title>Alterar funcionário</title>
</head>
<body>
<header>
    <h2><a href="../index.html"><img src="../imagem/icons8-vw-100.png" alt="VolksWagen icon" ></a></h2>
        <ul>
            <li><a href="../veiculo/cad_veiculo.html">Veículos</a></li>
            <li><a href="cad_cliente.html">Clientes</a></li>
            <li><a href="../peças/cad_peca.html">Peças</a></li>
        </ul>
    </header>
    <?php
        include_once('/xampp/htdocs/concessionariaVW/connection.php');
        $id = $_POST['id'];
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($conn, "SELECT * FROM tb_cliente WHERE id='$id'");

    ?>

    <p>
    <center>
        <form action="update_cliente.php" method="post">
        <h2>Update Cliente</h2>
            <?php while ($row = mysqli_fetch_array($result)) { ?>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <label for="nome">Nome:</label>
                <label><input type="text" placeholder="Nome" name="nome" value="<?php echo $row['nome']; ?>" /> </label>
                <label for="nome">Data de nascimento:</label>
                <label><input type="date" name="dNasc" value="<?php echo $row['dNasc']; ?>" /> </label>
                <label for="nome">CPF:</label>
                <label><input type="text" placeholder="CPF" name="cpf" value="<?php echo $row['cpf']; ?>" /> </label>
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

