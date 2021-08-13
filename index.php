<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <a href="index.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>
        <h1>Listar</h1>

        <?php 
        $query_usuario = "SELECT nome FROM usuarios";
        $result_usuarios = $conn->prepare($query_usuario);
        $result_usuarios->execute();
        
        if(($result_usuarios) AND ($result_usuarios->rowCount() !=0)){
            while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC))
                var_dump ($row_usuario);
            
            
        }else{    
            echo "<p style='color: #f00;'>Erro: Nenhum usuário encontrado!</p>";            
        }
        ?>        
    </body>
</html>
