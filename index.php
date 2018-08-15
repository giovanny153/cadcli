<?php
session_start()
?>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!-- BARRA DO TOPO -->
      <nav class="blue-grey">
        <div class = "nav-wrapper container">
          <div class ="brand-logo light"> Cad Cli</div>
          <ul class="right">
            <li><a href=""><i class="material-icons left">account_box</i>Cadastro</a></li>
            <li><a href=""><i class="material-icons left">find_in_page</i>Consultas</a></li>
            <li><a href=""><i class="material-icons left">monetization_on</i>Financeiro</a></li>
            <li><a href=""><i class="material-icons left">dvr</i>Relatório</a></li>
            <li><a href=""><i class="material-icons left">home</i>Imóveis</a></li>
          </ul>        
        </div>
      </nav>


      <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
          <fieldset class="formulario">
            <legend><img src="imgs/avatar.png" alt="(imagem)" width="100"></legend>
            <h5 class="light center">Cadastro de Clientes</h5>

            <!-- Exibir mensagem sobre cadastro não realizado por erro -->
            <?php
              if(isset($_SESSION['msg'])):
                echo $_SESSION['msg'];
                session_unset();
              endif
            ?>


          <!-- CAMPO NOME -->  
            <div class ="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
              <label for ="name">Nome do Cliente</label>
            </div>

          <!-- CAMPO E-MAIL -->  
            <div class ="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input type="email" name="email" id="email" maxlength="40" required>
              <label for ="email">E-mail</label>
            </div>

            <!-- CAMPO TELEFONE -->  
            <div class ="input-field col s12">
              <i class="material-icons prefix">phone</i>
              <input type="tel" name="tel" id="tel" maxlength="40" required>
              <label for ="tel">Telefone/Celular</label>
            </div>

            <!-- BOTÕES -->
            <div class="input-field col s12">
              <input type="submit" name="Cadastrar" class="btn blue">
              <input type="submit" name="Limpar" class="btn red">
            </div>


          </fieldset>
        </form>
      </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){


      });
    </script>

    </body>
  </html>