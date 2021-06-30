<?php

require '../config.php';
include '../src/Cadastro.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadastro = new Cadastro($mysql);
    $cadastro->editar($_POST['id'], $_POST['produto'], $_POST['quantidade'], $_POST['preco'], $_POST['descricao']);

    redireciona('/crud/index.php');
}

$cadastro = new Cadastro($mysql);
$cad = $cadastro->encontrarPorId($_GET['id']);

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
            <h1>Editar Produto</h1>
        </div>
        <form class="form" action="editar-cadastro.php" method="post">
            <div class="form__add">
                <label class="form__label"><?php echo "CÓDIGO: 00$cad[id]"; ?> | TIPO:</label>
                <input class="form__input" type="text" name="produto" value="<?php echo "$cad[produto]"; ?>" placeholder="Insira o tipo de produto" required />
            </div>
            <div class="form__add">
                <label class="form__label" for="">QUANTIDADE:</label>
                <input class="form__input" type="text" name="quantidade" value="<?php echo "$cad[quantidade]"; ?>" placeholder="Insira quantidade unitária" required />
            </div>
            <div class="form__add">
                <label class="form__label" for="">PREÇO UNITÁRIO: R$</label>
                <input class="form__input" type="text" name="preco" value="<?php echo "$cad[preco]"; ?>" placeholder="Insira o preço usando vírgula no decimal" required />
            </div>
            <div class="form__add">
                <label class="form__label" for="conteudo">DESCRIÇÃO:</label>
                <textarea class="form__input" type="text" name="descricao" placeholder="Insira a descrição do produto, detalhar material e tamanho"><?php echo "$cad[descricao]"; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $cad['id']; ?>" />
            <button class="button form__button">Concluir Produto</button>
            <a class="button form__button" href="../index.php">Cancelar</a>
        </form>
    </div>
</body>

</html>