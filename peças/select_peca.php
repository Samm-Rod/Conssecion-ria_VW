<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select_peca.css">
    <title>Listar Cursos</title>
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
    include_once('/xampp/htdocs/concessionariaVW/connection.php');

    if (!$conn) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($conn, "SELECT * FROM tb_peca");

    // Inicialize um array para armazenar os resultados
    $tbPeca = array();

    // Loop através dos resultados e armazene-os no array
    while ($row = mysqli_fetch_array($result)) {
        $tbPeca[] = $row;
    }

    ?>

    <p>
        <center>
            <table border="1">
                <!-- Cabeçalhos da tabela -->
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                </tr>
                <?php
                // Loop através dos dados no array
                foreach ($tbPeca as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['qtd']; ?></td>
                        <td><?php echo $row['valor']; ?></td>
                        <td>
                            <form action="formUpdate_peca.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                <button type="submit" name="botaltprod" value="ok">Alterar</button>
                            </form>
                        </td>
                        <td>
                            <form action="remover_peca.php" method="post">
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
          Copyright © 2023 Concessionária VolksWagen CRUD.
        </small>
      </footer>

</body>
</html>

