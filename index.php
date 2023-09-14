<?php 
  // importação do arquivo config para acesso a BD e controle de classe via pasta /classes (Autoload)
    include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votação | Conselhos</title>
  <script src="js/util.js"></script>
  <!-- Import de jquery para uso de ajax -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/script.js" defer></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tela.css">
</head>
<body>
  <h1>Votação para Conselheiros</h1>

  <form method="post" action="enviar.php" id="formulario">
    <div class="urna-area">
      <div class="urna">
        <div class="tela">
          <div class="principal">
            <div class="esquerda">
              <div class="rotulo r1">
                <span>Seu voto para</span>
              </div>
              <div class="rotulo r2">
                <span>Cargo</span>
              </div>
              <div class="rotulo r3">
                <div class="numero pisca"></div>
                <div class="numero"></div>
              </div>
              <div class="rotulo r4">
                <div class="mensagem"></div>
                <p class="nome-candidato">Nome: <span>Fulano de Tal</span></p>
                <p class="partido-politico">Partido: <span>XXXX</span></p>
                <p class="nome-vice">Vice-Prefeito: <span>Ciclano de Tal</span></p>
              </div>
            </div>
            <div class="direita">
              <div class="candidato">
                <div class="imagem">
                  <img src="" alt="Candidato">
                </div>
                <div class="cargo">
                  <p>Prefeito</p>
                </div>
              </div>
              <div class="candidato menor">
                <div class="imagem">
                  <img src="" alt="Vice">
                </div>
                <div class="cargo">
                  <p>Vice-Prefeito</p>
                </div>
              </div>
            </div>
          </div>
          <div class="rodape">
            <p>
              Aperte a tecla<br>
              CONFIRMA para CONFIRMAR este voto<br>
              CORRIGE para REINICIAR este voto.
            </p>
          </div>
        </div>

        <div class="lateral">
          <div class="logoarea">
            <img src="img/brasao.png" alt="Brasão da República">
            <h2>Conselho Tutelar</h2>
          </div>

          <div class="teclado">
            <div class="teclado--linha">
              <div class="teclado--botao">1</div>
              <div class="teclado--botao">2</div>
              <div class="teclado--botao">3</div>
            </div>
            <div class="teclado--linha">
              <div class="teclado--botao">4</div>
              <div class="teclado--botao">5</div>
              <div class="teclado--botao">6</div>
            </div>
            <div class="teclado--linha">
              <div class="teclado--botao">7</div>
              <div class="teclado--botao">8</div>
              <div class="teclado--botao">9</div>
            </div>
            <div class="teclado--linha">
              <div class="teclado--botao">0</div>
            </div>
            <div class="teclado--linha">
              <div class="teclado--botao especial branco">Branco</div>
              <div class="teclado--botao especial laranja">Corrige</div>
              <div class="teclado--botao especial verde">Confirma</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <footer>Todos os direitos reservados | Cayque Silva © 2023</footer>

</body>
</html>