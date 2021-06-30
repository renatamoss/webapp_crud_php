<?php

require '../config.php';
include '../src/Cadastro.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Cadastro($mysql);
    $artigo->remover($_POST['id']);

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
    <div class="container container__delete">

        <form class="form" method="post" action="excluir-cadastro.php">
            <div class="form__add">
                <label class="form__label" for="">Você realmente deseja excluir o produto?</label>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button class="button form__button button__delete">Excluir o Produto</button>
                <a class="button form__button" href="../index.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>

</html>