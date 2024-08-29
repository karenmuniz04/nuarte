<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve um envio do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Define as variáveis com os dados do formulário
  $nome = $_POST["nome"];
  $sala = $_POST["sala"];
  $data = $_POST["data"];
  $hora = $_POST["hora"];



  // Verifica se a sala já está reservada na data e hora especificadas
  $sql = "SELECT * FROM reservas WHERE sala = '$sala' AND data = '$data' AND hora = '$hora'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Se a sala já estiver reservada, exibe uma mensagem de erro
    echo "Desculpe, a sala já está reservada para esta data e hora.";
  } else {
    // Se a sala estiver disponível, insere os dados da reserva na tabela
    $sql = "INSERT INTO reservas (nome,sala, data, hora) VALUES ('$nome', '$sala', '$data', '$hora')";
    $conn->query($sql);

    // Exibe uma mensagem de confirmação
    echo "Sua reserva foi realizada com sucesso!";
  }
}

// Busca as reservas existentes no banco de dados
$sql = "SELECT hora FROM reservas WHERE data = '$data' AND sala = '$sala'";
$result = $conn->query($sql);

$reservas = array();

if ($result->num_rows > 0) {
  // Armazena os horários das reservas em um array
  while ($row = $result->fetch_assoc()) {
    $reservas[] = $row['hora'];
  }
}

// Array de horários disponíveis
$horariosDisponiveis = array('09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00');

// Verificar horários ocupados
$horariosOcupados = array();
foreach ($reservas as $reserva) {
  $horariosOcupados[] = $reserva;
}

// Obter horários livres
$horariosLivres = array_diff($horariosDisponiveis, $horariosOcupados);
?>



<!DOCTYPE html>
<html>
<head>
  <title>Reserva de Salas</title>
  <style>
    .horario-ocupado {
  background-color: red;
  color: white;
}

.horario-livre {
  background-color: green;
  color: white;
}
 </style>
</head>
<body>
  <h1>Reserva de Salas</h1>
  
  <p>Por favor, preencha o formulário abaixo para fazer uma reserva.</p>
  <form method="post" action="http://localhost/cadastro/reservasala.php">

   <label for="nome">Nome do Responsável:</label>
    <input type="text" name="nome" id="nome"/><br><br> 

    <label for="sala">Sala:</label>
    <select name="sala" id="sala">
      <option value="musica">Sala de música </option>
      <option value="teatro">Sala de Teatro</option>
      <option value="artes">Sala de Artes Visuais</option>
    </select><br><br>

    <label for="data">Data:</label>
    <input type="date" name="data" id="data"/><br><br>


    <label for="hora">Hora:</label>
    <select name="hora" id="hora">
  <?php
  // Exibe as opções de horários no formulário
  foreach ($horariosLivres as $horario) {
    echo '<option value="' . $horario . '">' . $horario . ' (Livre)</option>';
  }

  foreach ($horariosOcupados as $horario) {
    echo '<option value="' . $horario . '" class="horario-ocupado">' . $horario . ' (Ocupado)</option>';
  }
  ?>
</select>




    <input type="submit" value="Reservar"/>
  </form>
</body>
</html>




