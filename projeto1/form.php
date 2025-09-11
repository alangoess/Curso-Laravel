<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

       <form action="form.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <label for="senha">cidade</label>
            <input type="text" name="cidade">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="cpf">Cpf</label>
            <input type="text" name="cpf">
            <input type="submit">
        </form>

    <main>
        <?php 
         
         if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $nome = $_POST["nome"] ?? "sem nome";
            $cidade = $_POST["cidade"] ?? "sem nome";
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];


            $linha = "Nome: $nome | Cidade: $cidade | Email: $email | CPF: $cpf" . PHP_EOL; //PHP_EOL é usado para quebrar a linha cada vez que um usuário é cadastrado

            file_put_contents("usuarios1.txt", $linha, FILE_APPEND); // FILE_APPEND em vez de sobrescrever.cada vez que você cadastra alguém novo, ele vai acumulando as linhas no arquivo.

     

            echo "Usuario cadastrado com sucesso! "; 
         }
         
         if(file_exists("usuarios1.txt")){ 

            echo "<h2>Lista de Usuarios</h2>";
            echo nl2br(file_get_contents("usuarios1.txt")); //file_get_contents recupera as informaçoes enviadas pelo put_contents e o nl12br quebra a linha

         }
        
        ?>
    </main>

  
</body>

</html>