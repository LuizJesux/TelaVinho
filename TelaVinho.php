    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            Nome: <input type="text" name="nome" id="nome" value=""><br>
            Tipo: <input type="text" name="tipo" id="tipo" value=""><br>
            Safra: <input type="text" name="safra" id="safra" value=""><br>
            Preço: <input type="number" name="preco" id="preco" value=""><br>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar">
        </form>
    </body>
    </html>
<?php

require_once ('vinho.php');
$v = new Vinho();

if(isset($_POST['btnCadastrar'])){
    $v->setNome($_POST['nome']);
    $v->setTipo($_POST['tipo']);
    $v->setSafra($_POST['safra']);
    $v->setPreco($_POST['preco']);
    echo $v->mostrarVinho();
    if ($v->verificarPreco($v->getPreco()) == true) {
        echo "promoção";
    }else {
        echo "não é promoção";
    }
}

   
?>