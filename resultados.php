<?php
    include('config.php');
    $json = file_get_contents('etapas.json');
    $dados = json_decode($json,true);

    $candidatos = $dados[0]['candidatos'];
    $votos = Painel::buscaVoto('tb_votos');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado | Conselhos</title>
  <script src="js/util.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tela.css">
</head>
<body>
  <div class="comanda-content">
    <h1>Conselheiros Tutelares</h1>
    <h3>Verifique abaixo o resultado da votação</h3>
    <table class="comanda-resultados">
            <tr>
                <th>Candidato</th>
                <th>Número</th>
                <th>Votos</th>
            </tr>
            <?php foreach($votos as $voto){
                echo '<tr class="candidato-resultado">';
                    foreach($candidatos as $candidato){
                        if($candidato['numero'] == $voto[0]){
                            echo '<td class="candidato">'.$candidato['nome'].'</td>';
                        }
                    }
                    if($voto[0] == 'Branco' || $voto[0] == 'Nulo'){
                        echo '<td class="candidato">'.$voto[0].'</td>';
                        echo '<td class="candidato">-</td>';
                        echo '<td class="votos">'.$voto[1].'</td>';
                    }else{
                        echo '<td class="candidato">'.$voto[0].'</td>';
                        echo '<td class="votos">'.$voto[1].'</td>';
                    }
                echo '</tr>';
            } ?>
        </table>
  </div>
    <footer>Todos os direitos reservados | Cayque Silva © 2023</footer>
</body>
</html>