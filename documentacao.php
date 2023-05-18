<?php include ("bd/conexao.php"); 
      include ("bd/consulta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAT - WEB ACESSÍVEL PARA TODOS : DOCUMENTAÇÃO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/pg_home/header_home.css">
    <link rel="stylesheet" href="assets/style/pg_documentacao/main_documentacao.css">
    <link rel="stylesheet" href="assets/style/pg_home/pagina_inicial.css">
    <link rel="stylesheet" href="assets/style/media/media_menu_hamburguer.css">

</head>
<body>
    <header>
        <div tabindex="0" vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
              <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
            <section class="imagens">
            <img class="img-laranja" src="assets/img/forma-laranja.png" alt="Circulo vazado de cor laranja">
            <nav class="nav">
                <div aria-label="Navegação entre três páginas" role="navigation" tabindex="0" class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul tabindex="0" id="ativo" class="nav-list"
                    role="navigation"
                    aria-label="Navegação entre três páginas"
                >
                    <li class="nav-item">
                        <a tabindex="0" class="nav-link"  href="documentacao.html">Documentação</a>
                    </li>
                    <li class="nav-item">
                        <a tabindex="0" class="nav-link"  href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a tabindex="0" class="nav-link"  href="acessibilidade.html">Acessibilidade</a>
                    </li>
                </ul>
            </nav>
            <img class="img" src="assets/img/forma-azul.png" alt="Forma em formato de onda na cor azul escuro">
    </header>
    <main id="top">
        <section  class="busca">
          <h1 tabindex="0">Navegue pela documentação WCAG</h1>
          <h2 tabindex="0">Escolha a diretriz e o nível de acessibilidade</h2>
          <div class="row g-2">
              <div class="col-md">
                  <div class="form-floating">
                    <select class="form-select" id="diretriz" name="diretriz">
          
                      <option selected>Selecione a diretriz</option>
                      <option value="1">Perceptível</option>
                      <option value="2">Robusto</option>
                      <option value="3">Operável</option>
                      <option value="4">Compreensivo</option>
                      <option value="5">Conformidade</option>
                    </select>
                    <label aria-label="Escolha a diretriz - Existem cinco diretrizes" for="diretriz">Escolha a diretriz</label>
                  </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <select class="form-select" id="nivel">
                    <option selected>Selecione o nível</option>
                    <option value="1">Nível A</option>
                    <option value="2">Nível AA</option>
                    <option value="3">Nível AAA</option>
                  </select>
                  <label aria-label="Escolha o nível - Existem três niveis" for="nivel">Escolha o nível</label>
                </div>
              </div>
          </div>
        </section>
        <section class="criterios">
        <?php
              $result = busca_criterio($conn);
            
              while($linha = mysqli_fetch_assoc($result)){
        ?>
               <h3><?= utf8_encode($linha['nm_exemplo'])?></h3>
               <p><?= utf8_encode($linha['exemplo'])?></p>
        <?php
              }
          ?>
        </section>
    </main>
    <footer>
        <section>
            <img class="logo" tabindex="0" src="assets/img/logo-acessibiliza.svg" alt="Logo da empresa acessibiliza, globo com borboleta sobreposta na cor azul">
        </section>
        <section>
          <p tabindex="0">Todos os direitos reservados &copy; 2023</p>
          <p tabindex="0">Desenvolvido pelo grupo Acessibiliza</p>
        </section>
      </footer>
    <script src="mobile.navbar.js"></script>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script src="vlibras.js"></script>
    <noscript>
        Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a>
    </noscript>
    <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "H2Bcqw9fy9");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script>
    <noscript>
        Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a>
    </noscript>
</body>
</html>