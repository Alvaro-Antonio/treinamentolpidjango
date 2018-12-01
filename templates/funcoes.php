<?php
  ini_set('display_errors',1);
  ini_set('display_startup_erros',1);
  error_reporting(E_ALL);

  function menu(){
    session_start();
    if (!isset($_SESSION['emailLpi']) or !isset($_SESSION['senhaLPi'])) {
    ### Não  Logado ##########
      echo "
      <!DOCTYPE html>
      <html lang=\"pt-br\">
      <head>
      <meta charset=\"utf-8\" />
      <meta name=\"robots\" content=\"index, follow\" />
      <title>Treinamento Lpi </title>
      <link rel=\"shortcut icon\" href=\"imagens/imagens/lpiicon.png\" type=\"image/x-icon\" />
       <meta name=\"keywords\" content=\"Treinamento LPI,LPI,LPIC\">
       <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
       <link rel=stylesheet href=styleUser.css type=text/css media=screen>
       <link rel=stylesheet href=font-awesome-4.7.0/css/font-awesome.css >
      <script type=text/javascript src=jquery/mod1/js/jquery.js ></script>
       <script type=\"text/javascript\">
        $(document).ready(function(){
          $(\"#id02 a\").click(function( e ){
            e.preventDefault();
            var href = $( this ).attr('href');
            $(\"#conteudo\").load(href);
          });
        });
      </script>

      </head>

      <body>
      <header class=cabecalho >
            <a href=index.php ><p class=logo >&nbsp; </p></a>
            <button class=btn-menu ><i class=\"fa fa-server\" aria-hidden=\"true\"></i></button>
            <nav class=menu >
              <a class=close ><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
              </a>
              <ul>
                <li ><a href=\"index.php\" >Início <i class=\"fa fa-home\" aria-hidden=\"true\"></i></li>
                <li ><a href=\"#idSimulado\" > Simulado <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                </a></li>
                <li><a href=\"login.php\" >Login <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i></li>
                <li ><a href=\"#id01\">Sobre<i class=\"fa fa-plus\" aria-hidden=\"true\"></i></a></li>
                <br><footer> <img src=\"imagens/teste.png\" alt=\"Logo Treinamento LPI\" style=\"width:100%\"></footer>
              </ul>

            </nav>

      </header>
      <div id=\"id01\" class=\"modal\">
      <div class=\"modal-dialog\">
      <div class=\"modal-content\">
      <header class=\"container\">
        <a href=\"#\" class=\"closebtn\">&nbsp;×</a>
        <img src=\"teste.png\" alt=\"Logo Treinamento LPI\" style=\"width:180px;height:auto;float:left;\">
          <h2>Treinamento LPI</h2>
      </header>
      <div class=\"container\">
        <p>Versão 1.0</p>
        <p>Desenvolvido para fins públicos</p>
      </div>
      <footer class=\"container\">

      <label><br>Site Desenvolvido por Phoenix Tecnologia ©</label><br>
      <label>alvaroantoniosbu@gmail.com</label><br><br>
      </div>
      </div>
      </div>

      <div id=\"idSimulado\" class=\"modalidSimulado\" >
      <div class=\"modal-dialogidSimulado\" >
      <div class=\"modal-contentidSimulado\">
      <header class=\"containeridSimulado\">
      <a href=\"#\" class=\"closebtnidSimulado\">&nbsp;×</a>
      <div id=\"background\">
          <h2>Realize seu Login</h2>
        <div class=\"loginsidSimulado\" >
        <form method=\"post\" action=\"autenticacao.php\">
          <div ><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
            <input type=\"email\" autofocus id=\"email\" name=\"email\" required placeholder=\"Digite seu E-mail\">
          </div>
          <span style=\"color: red;\">";
                          //session_start();
                          if (isset($_SESSION['login_Erro'])){
                          echo $_SESSION['login_Erro'];
                          unset($_SESSION['login_Erro']);
                            }
            echo "</span>
            <div><i class=\"fa fa-key\" aria-hidden=\"true\"></i>
              <input type=\"password\" name=\"senha\" id=\"senha\"  required placeholder=\"Digite sua senha\">
            </div>
            <a  href=\"cadastro.php\"><span>Ainda não possuo Cadastro</span></a>
            <input type=\"submit\" name=\"Entrar\" value=\"Entrar\">
        </form>
        </div>
      </div>
      </header>

          </div>
      </div>
      </div>
    
          <script type=text/javascript src=jquery/mod1/js/jquery.js ></script>
           <script >
            $(\".btn-menu\").click(function () {
              $(\".menu\").show();
            });
            $(\"a\").click(function() {
              $(\".menu\" ).hide();
            });
            $(\".close\" ).click(function () {
              $(\".menu\" ).hide();
            });
           </script>
      </body>
            
      </html>";
    }else{
      echo "
      <!DOCTYPE html>
      <html lang=\"pt-br\">
      <head>
      <meta charset=\"utf-8\" />
      <meta name=\"robots\" content=\"index, follow\" />
      <link rel=\"shortcut icon\" href=\"imagens/lpiicon.png\" type=\"image/x-icon\" />
       <meta name=\"keywords\" content=\"Treinamento LPI,LPI,LPIC\">
       <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
       <link rel=stylesheet href=styleUser.css type=text/css media=screen>
       <link rel=stylesheet href=font-awesome-4.7.0/css/font-awesome.css >
      <script type=text/javascript src=jquery/mod1/js/jquery.js ></script>
       <script type=\"text/javascript\">
        $(document).ready(function(){
          $(\"#id02 a\").click(function( e ){
            e.preventDefault();
            var href = $( this ).attr('href');
            $(\"#conteudo\").load(href);
          });
        });
      </script>

      </head>

      <body>
      <header class=cabecalho >
            <a href=index.php ><p class=logo >&nbsp; </p></a>
            <button class=btn-menu ><i class=\"fa fa-server\" aria-hidden=\"true\"></i></button>
            <nav class=menu >
              <a class=close ><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
      </a>
              <ul>
                <li ><a href=\"user.php\" >Inicio <i class=\"fa fa-home\" aria-hidden=\"true\"></i></li>
                          <li id=id02 ><a href=simulado.php >Simulado <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
      </a></li>
                <li id=\"id02\"><a href=\"sugestoes.php\" >Sugestões <i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i></li>
                <li><a href=sobre.php>Sobre <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></a></li>
                <li><a href=sair.php>Sair <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i></a></li>
                <br><footer> <img src=\"imagens/teste.png\" width=100% ></footer>
              </ul>

            </nav>

        </header>
        <div id=\"id01\" class=\"modal\">
      <div class=\"modal-dialog\">
      <div class=\"modal-content\">
      <header class=\"container\">
      <a href=\"#\" class=\"closebtn\">&nbsp;×</a>
      <img src=\"lpi.png\" alt=\"Logo Treinamento LPI\" style=\"width:180px;height:auto;float:left;\">
        <h2>Treinamento LPI</h2>
      </header>
      <div class=\"container\">
        <p>Versão 1.0</p>
        <p>Desenvolvido para fins públicos</p>
      </div>

      <footer class=\"container\">

      <label><br>Site Desenvolvido por Phoenix Tecnologia ©</label><br>
      <label>alvaroantoniosbu@gmail.com</label><br><br>
      </div>
      </div>
      </div>
      https://github.com/Alvaro-Antonio/TreinamentoLpi.git
          <script type=text/javascript src=jquery/mod1/js/jquery.js ></script>
           <script >
            $(\".btn-menu\").click(function () {
              $(\".menu\").show();
            });
            $(\"a\").click(function() {
              $(\".menu\" ).hide();
            });
            $(\".close\" ).click(function () {
              $(\".menu\" ).hide();
            });
           </script>


      </body>

      </html>";
    }
  }
function rodape(){
/*  echo "<footer width=100%>
    <div id=\"fb-root\"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class=\"fb-page\"
    data-href=\"https://www.facebook.com/TreinamentoLpi/\"
    data-width=\"200\"
    data-hide-cover=\"false\"
    data-show-facepile=\"true\"></div>
  </footer>";*/
}
function sessao(){
      $tempo= time();
      //session_start();
      if(isset($_SESSION['tempolimite']) ){
          if ( $tempo > $_SESSION['tempolimite']){
            session_destroy();
            echo "
             <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
             <script type=\"text/javascript\">
             alert(\"Sua Sessão encerrou por inatividade\");
             </script>
             ";
             exit;

          }else{
            $_SESSION['tempolimite']= time() + 3600;
          }
    }

      if(!isset($_SESSION["emailLpi"]) || !isset($_SESSION["senhaLPi"])){

           echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.php'>
            <script type=\"text/javascript\">
            alert(\"Erro: É nescessário fazer Login! Você será redirecionando a página de Login\");
            </script>
            ";

          exit;
        }else{

          $_SESSION["emailLpi"];
          $_SESSION["idLpi"];
          $_SESSION["senhaLPi"];
          $_SESSION['tempolimite'];

        }
    }
function buscaPerguntas($limit){
  include("conex.php");
  $sql = "SELECT * FROM simulado ORDER BY RAND() LIMIT $limit";
  #$resutado =
    }
function validaEmail($chave){
  $chave = $_GET["chave"];
  include("conex.php");
  $sql="UPDATE usuarios SET status ='$chave' WHERE usuarios.email = '$email'";
  $resultado = $pdo->query($sql);
  $resultado->execute();
  if($resultado) {
  echo
     "
      <META HTTP-EQUIV=REFRESH CONTENT='0; URL=consultausuariosadm.php'>
      <script type=\"text/javascript\">
      alert(\"Senha Alterada com Sucesso! \");
      </script>
      ";
  mysql_close;
  }else {
      echo "Este email não está cadastrado ou já foi confirmado";

  }
}
function nomeUsuario(){
      include_once("conex.php");
      $email = $_SESSION['emailLpi'];
      $sql="SELECT nome FROM usuarios where email='$email'";
        if (!$sql){
          mysql_error();
        }

      $resultado = $pdo->query($sql);
      $resultado->execute();
      $resultado=$resultado->fetchAll(PDO::FETCH_ASSOC);
      $nome = explode(" ", $resultado[0][nome]);
      $nome = $nome[0];
      //echo utf8_decode($nome);
      return utf8_encode($nome);
      mysql_close;
    }
 ?>
