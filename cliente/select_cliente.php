<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
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
        $conn = mysqli_connect("localhost", "root", "", "db_concessionaria");

        if (!$conn) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($conn, "SELECT * FROM tb_cliente");

        // Inicialize um array para armazenar os resultados
        $tbCliente = array();

        // Loop através dos resultados e armazene-os no array
        while ($row = mysqli_fetch_array($result)) {
            $tbCliente[] = $row;
        }

    ?>

    <p>
        <center>
            <table border="1">
                <!-- Cabeçalhos da tabela -->
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>CPF</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                </tr>
                <?php
                // Loop através dos dados no array
                foreach ($tbCliente as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['dNasc']; ?></td>
                        <td><?php echo $row['cpf']; ?></td>
                        <td>
                            <form action="formUpdate_cliente.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                <button type="submit" name="botaltprod" value="ok">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form action="remover_cliente.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                <button type="submit" name="botaltprod" value="ok">Remover</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </table>
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

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #333;
    color: #fff;
}

form button {
    background-color: #333;
    color: #fff;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
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
