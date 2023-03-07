<!DOCTYPE html>
<html>
  <head>
    <title>Ordem de Serviço</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Ordem de Serviço</h1>
     <?php
     // Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "os";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

     ?>
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" />

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" />

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" />

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>

        <label for="prioridade">Prioridade:</label>
        <select id="prioridade" name="prioridade">
          <option value="baixa">Baixa</option>
          <option value="media">Média</option>
          <option value="alta">Alta</option>
        </select>

        <button type="submit">Enviar</button>
      </form>
    </div>
  </body>
  <script src="script.js"></script>
</html>
