<?php
  //Testa a conexão com o banco de dados e em caso positivo executa o TRY
if($_POST){
    $dsn = 'mysql:host=rosabalan.mysql.uhserver.com;dbname=rosabalan;charset=utf8;port:3306';
    $db_user = 'thiago_pereira';
    $db_pass = 'Labels@25';
  try{
        
    $db = new PDO($dsn, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Prepara a inclusão dos dados alimentados por POST no formulário do front-end
    $query = $db->prepare('INSERT INTO clientes_mailing (nome, sobrenome, email, estado_id)
      VALUES(:nome, :sobrenome, :email, :estado_id)');
    // Grava os dados no banco
    $query->execute([
      ':nome'=>$_POST['nome'],
      ':sobrenome'=>$_POST['sobrenome'],
      ':email'=>$_POST['email'],
      ':estado_id'=>$_POST['estados_brasil']
      ]);
    header('Location:splash.php?msg=registro_incluido_ok');
  }
  // Em caso de erro na conexão com o banco de dados, o catch prepara para tratar o erro e devolve a mensagem no query do navegador
  catch(PDOException $e){
    header('Location:error.php?msg=erro'.$e->getMessage());
  die(); 
  }
}
?>