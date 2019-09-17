<?php
//Conexão com o banco de dados
$dsn = 'mysql:host=rosabalan.mysql.uhserver.com;dbname=rosabalan;charset=utf8;port:3306';
$db_user = 'thiago_pereira';
$db_pass = 'Labels@25';

try{
  $db = new PDO($dsn, $db_user, $db_pass);
  //Executa a lista dos Estados 
  $query = $db->query('SELECT estado_id, sigla, estados FROM estados');
  //Retorna o array com a relação de Estados
  $estados = $query->fetchAll(PDO::FETCH_ASSOC);

}catch( PDOException $Exception ) {
  echo $Exception->getMessage();
}

?>
