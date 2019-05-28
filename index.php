<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139868758-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139868758-1');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|PT+Sans+Narrow" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media_576.css">
    <link rel="stylesheet" href="./css/media_768.css">
    <link rel="stylesheet" href="./css/media_992.css">
    <title>Rosabalan Lingerie</title>
  </head>
  <body>
    <div class="main_grid">

        <section>

          <article>
            <div class="logo_container">
              <img class="logo" src="imagens/logo_black.jpg" alt="rosabalan"/>
              <div class="headline1">
                <p id="head1">Conforto é essencial...</p>
                <p id="head2">Você precisa conhecer nossas lingeries</p>
              </div>
              </div>
          </article>

          <div class="headline2">
            <p id="head3">Cadastre-se e receba antecipadamente nossas novidades.</p>
          </div>

          
         <form class="cadastro_container" action="db_funcoes.php" method="post" enctype="multipart/form-data">
          <div class="label_cad">
            <a id="label1">Nome</a>
          </div>

          <div class="label_cad2">
            <a id="label2">Sobrenome</a>
          </div>

          <div class="label_cad3">
            <a id="label3">E-mail</a>
          </div>

          <div class="label_cad4">
            <a id="label4">Localidade</a>
          </div>

          <div class="form_grid_item">
            <input class="cad_form_input" type="text" name="nome" value="" required autocomplete="off">
            <label class="cad_form_label" for="nome"></label>
          </div>

          <div class="form_grid_item2">
            <input class="cad_form_input2" type="text" name="sobrenome" value="" required autocomplete="off">
            <label class="cad_form_label" for="sobrenome"></label>
          </div>

          <div class="form_grid_item3">
            <input class="cad_form_input3" type="email" name="email" value="" required autocomplete="off">
            <label class="cad_form_label" for="email"></label>
          </div>

        <div class="form_grid_item4">
            <label class="cad_form_label" for="localidade"></label>
            <select id="estados" name="estados_brasil">
              <?php
              require_once('db_conn.php');
              foreach ($estados as $estados_brasil){ ?>
                <option value="<?php echo $estados_brasil['estado_id']; ?>"><?php echo $estados_brasil['estados']; ?></option>
              <?php } ?>
            </select>
        </div>

          <div class="form_grid_item5">
            <input class="cad_btn" alt="Cadastrar" type='submit' value='Cadastrar'/>
          </div>

      </form>

        <div class="headline3">
            <p id="head4">* Enquanto o site completo não fica pronto, além de cadastrar seu e-mail solicite os modelos pelo Whatsapp: (11) 9.9800.4968</p>
        </div>

    </section>
      </div>
    </body>
</html>
