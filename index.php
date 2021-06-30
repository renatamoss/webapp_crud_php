<?php

require 'config.php';

include 'src/Cadastro.php';
$produto = new Cadastro($mysql);
$produtos = $produto->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gestão de Produtos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/base/base.css">
    <link rel="stylesheet" type="text/css" href="assets/css/componentes/container.css">
    <link rel="stylesheet" type="text/css" href="assets/css/componentes/content.css">
    <link rel="stylesheet" type="text/css" href="assets/css/componentes/form.css">
    <link rel="stylesheet" type="text/css" href="assets/css/componentes/button.css">
    <link rel="stylesheet" type="text/css" href="assets/css/componentes/footer.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="container__title">
            <a class="container__title__active" href="index.php">
                <h1>Consulta de Produtos</h1>
            </a>
            <a href="admin/admin.php">
                <h1>Controle de Estoque</h1>
            </a>
        </div>
        <div class="content">
            <div class="content__hidden"></div>
            <?php foreach ($produtos as $produto) : ?>
                <div class="content__control">
                    <h2 class="content__title">
                        <?php echo "CÓDIGO: 900$produto[id] | TIPO: $produto[produto]"; ?>
                    </h2>
                    <div class="content__description">
                        <p> <?php echo "QUANTIDADE: $produto[quantidade]"; ?> </p>
                        <p> <?php echo "PREÇO UNITÁRIO: R$ $produto[preco]"; ?> </p>
                        <p> <?php echo "DESCRIÇÃO: $produto[descricao]"; ?> </p>
                        <p> <?php echo "INSERIDO EM: " . (new DateTime($produto['inserido_em']))->format('d/m/Y H:i'); ?> </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <footer class="footer"> Copyright © 2021 | Desenvolvido por Renata Marques</footer>
</body>

</html>