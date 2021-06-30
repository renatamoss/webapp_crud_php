<?php

require '../config.php';
require '../src/Cadastro.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadastro = new Cadastro($mysql);
    $cadastro->adicionar($_POST['produto'], $_POST['quantidade'], $_POST['preco'], $_POST['descricao']);

    redireciona('/crud/index.php');
}

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
        <div class="container__title container__edit_product">
            <h1>Adicionar Produto</h1>
        </div>
        <div class="content">
            <form class="form" action="adicionar-cadastro.php" method="post">
                <div class="form__add">
                    <label class="form__label" for="">TIPO:</label>
                    <input class="form__input" type="text" name="produto" placeholder="Insira o tipo de produto" required />
                </div>
                <div class="form__add">
                    <label class="form__label" for="">QUANTIDADE:</label>
                    <input class="form__input" type="text" name="quantidade" placeholder="Insira a quantidade unitária" required />
                </div>
                <div class="form__add">
                    <label class="form__label" for="">PREÇO UNITÁRIO: R$</label>
                    <input class="form__input" type="text" name="preco" placeholder="Insira o preço usando vírgula no decimal" required />
                </div>
                <div class="form__add">
                    <label class="form__label" for="">DESCRIÇÃO:</label>
                    <textarea class="form__input" type="text" name="descricao" placeholder="Insira a descrição do produto, detalhar material e tamanho" required></textarea>
                </div>
                <button class="button form__button">Adicionar Produto</button>
                <a class="button form__button" href="../index.php">Cancelar</a>
            </form>
        </div>
    </div>
</body>

</html>