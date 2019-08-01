<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Vinho</title>
    </head>
        <body>
            <h1>Sucesso!</h1>
            <p>Aqui está a informação que você submeteu:</p><br>
            <?php
            $tipo=$_POST['radio'];
            $nome=$_POST['nome'];
            $refeicao=$_POST['refei'];

            echo "Obrigado por definir suas preferências, $nome\n";
            echo "Você aprecia um bom vinho $tipo\n";
            echo "Fica ainda melhor com $refeicao, não?\n";
            ?>