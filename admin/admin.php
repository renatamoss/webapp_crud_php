<?php

require '../config.php';

include '../src/Cadastro.php';
$cadastro = new Cadastro($mysql);
$cadastros = $cadastro->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gestão de Produtos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/base/base.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/componentes/container.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/componentes/content.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/componentes/form.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/componentes/button.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/componentes/footer.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="container__title">
            <a href="../index.php">
                <h1>Consulta de Produtos</h1>
            </a>
            <a class="container__title__active" href="admin.php">
                <h1>Controle de Estoque</h1>
            </a>
        </div>
        <div class="content">
            <div class="button__add">
                <button class="button"><a href="adicionar-cadastro.php">Adicionar Produto</a></button>
            </div>
            <?php foreach ($cadastros as $cad) { ?>
                <div class="content__control">
                    <h2 class="content__title">
                        <?php echo "CÓDIGO: 900$cad[id] | TIPO: $cad[produto]"; ?>
                    </h2>
                    <div class="content__description">
                        <p> <?php echo "QUANTIDADE: $cad[quantidade]"; ?> </p>
                        <p> <?php echo "PREÇO UNITÁRIO: R$ $cad[preco]"; ?> </p>
                        <p> <?php echo "DESCRIÇÃO: $cad[descricao]"; ?> </p>
                    </div>
                    <nav class="buttons">
                        <a class="button" href="editar-cadastro.php?id=<?php echo $cad['id']; ?>">Editar</a>
                        <a class="button" href="excluir-cadastro.php?id=<?php echo $cad['id']; ?>">Excluir</a>
                    </nav>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>