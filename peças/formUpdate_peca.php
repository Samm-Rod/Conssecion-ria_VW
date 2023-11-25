<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Curso</title>
</head>
<body>
<header>
        <h2><a href="../index.html"><img src="../imagem/icons8-vw-100.png" alt="VolksWagen icon" ></a></h2>
        <ul>
            <li><a href="../veiculo/cad_veiculo.html">Veículos</a></li>
            <li><a href="../cliente/cad_cliente.html">Clientes</a></li>
            <li><a href="cad_peca.html">Peças</a></li>
        </ul>
    </header>
    <?php

        $id = $_POST['id'];

        $con = mysqli_connect("127.0.0.1", "root", "", "db_concessionaria");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM tb_peca WHERE id='$id'");

    ?>

<p>
<center>
    <form action="update_peca.php" method="post">

        <?php while ($row = mysqli_fetch_array($result)) { ?>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <label><input type="text" placeholder="Nome do Peça" name="nome" value="<?php echo $row['nome']; ?>" /> </label><br/>
            <label><input type="text" placeholder="Quantidade" name="qtd" value="<?php echo $row['qtd']; ?>" /> </label><br/>
            <label><input type="text" placeholder="Valor" name="valor" value="<?php echo $row['valor']; ?>" /> </label><br/>
            <button type="submit" name="enviar" value="ok"> Alterar </button>

        <?php } ?>

    </form>
</center>
</p>

<footer>
            <small>
            Copyright © 2023 Conssecionária VolksWagen CRUD.
            </small>
        </footer>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    color: #333;
    margin: 0;
}

header {
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: center; /* Centraliza o conteúdo horizontalmente */
    align-items: center;
}

header h2 {
    margin: 0;
}

ul {
    list-style: none;
}

ul li {
    display: inline-block;
    margin-right: 20px;
}

ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form h2 {
    text-align: center;
}

form label {
    display: block;
    margin: 10px 0;
}

form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

form button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form button[type="reset"] {
    background-color: #ccc;
    margin-right: 10px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

footer small {
    font-size: 0.8em;
}


</style>