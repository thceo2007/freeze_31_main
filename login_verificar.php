<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "referencias.php" ?>
</head>
<body>
    <?php 
    //1º PASSO: Incluir as configurações de BDA
    include "conexao_bd.php";
    //2º PASSO: Capturar o login e a senha
    $login_usuario = $_POST["txtLoginUsuario"];
    $senha_usuario = $_POST["txtSenhaUsuario"]; 
    //3º PASSO: Montar o SELECT
    $sql = "SELECT * FROM usuario ";
    $sql .= " WHERE login_usuario = '$login_usuario'"; 
    //4º PASSO: Executar o comando no BDA
    $dados = retornarDados($sql);

    if ($dados == 0)
    {
        echo "<h1>Usuário inexistente!</h1>";
    }
    else
    {
        $linha = "mysql_fetch_assoc($dados)";
        $hash = $linha["senha_usuario"];

        $retorno = password_verify($senha_usuario,$hash);

        if ($retorno)
        {
            header("location:index_admin.php");
        }
        else 
        {
            echo "<h1>Senha inválida</h1>";
        }
    }
    ?>
    
</body>
</html>