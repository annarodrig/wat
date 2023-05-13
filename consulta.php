<?php
$conexao = new mysqli('Anna', 'root', '1234', 'mydb');
if ($conexao->connect_errno) {
  echo "Falha ao conectar-se ao banco de dados: " . $conexao->connect_error;
  exit();
}

$sql = "SELECT coluna1, coluna2 FROM dados";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
  $dados = array();
  while ($row = $resultado->fetch_assoc()) {
    $dados[] = $row;
  }
  echo json_encode($dados);
} else {
  echo "Nenhum resultado encontrado";
}

$conexao->close();
?>
