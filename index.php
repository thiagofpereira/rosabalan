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
    <meta name="description" content="Loja online Rosabalan Lingerie & Sleepwear">
    <meta name="keywords" content="lingerie, lingeries, pijamas, camisola, body, bodies, moda feminina, moda intima">
    <meta name="robots" content="index, follow">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|PT+Sans+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media_576.css">
    <link rel="stylesheet" href="./css/media_768.css">
    <link rel="stylesheet" href="./css/media_992.css">
    <title>Rosabalan Lingerie & Sleepwear</title>
  </head>
  <body>
    <div class="main_grid">

        <section>

          <article>
            <div class="logo_container">
              <img class="logo" src="imagens/logo_white.png" alt="rosabalan"/>
            </div>
          </article>
          <article>
            <div class="cham1">
              <p id="linha1">Enquanto a loja online e o showroom não ficam prontos, faça seu cadastro e garanta <span>15%</span> de desconto no lançamento</p> 
            </div>
          </article>
          <article>
            <div class="cham2">
              <p id="linha2">Com o cadastro você também pode utilizar seu desconto para compras via Whatsapp, Facebook e Instagram</p>
          </article>
          <article>
            <div class="cham3">
              <p id="linha3"><strong>Siga-nos</strong></p>
          </article>
          
          <article>
          <div class="social_media_boxes">
          <div class="social1">  
            <a href="https://www.instagram.com/rosabalan.lingerie/" target="_blank">
            <img id="instagram" title="instagram" src="imagens/instagram.png" alt="instagram">
            </a>
          </div>
          <div class="social2">
          <a href="https://www.facebook.com/rosabalanlovemade/" target="_blank">
            <img id="facebook" title="facebook" src="imagens/facebook.png" alt="facebook">
            </a>
          </div>
          <div class="social3">
          <a href="https://twitter.com/rosabalanl" target="_blank">
            <img id="twitter" title="twitter" src="imagens/twitter.png" alt="twitter">
            </a>
          </div>
          <div class="social4">
          <a href="https://api.whatsapp.com/send?phone=5511998004968" target="_blank">
            <img id="whatsapp" title="whatsapp" src="imagens/whatsapp.png" alt="whatsapp">
            </a>
          </div>  
          </div>
          </article>
          
          <div class="main_cadastro_container">
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
          </div>
      </section>
      </div>
    </body>
</html>
