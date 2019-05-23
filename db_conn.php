<?php
$dsn = 'mysql:host=rosabalan.mysql.uhserver.com;dbname=rosabalan;charset=utf8;port:3306';
$db_user = 'thiago_pereira';
$db_pass = 'Labels@25';

try{
  $db = new PDO($dsn, $db_user, $db_pass);

  $query = $db->query('SELECT estado_id, sigla, estados FROM estados');

  $estados = $query->fetchAll(PDO::FETCH_ASSOC);

}catch( PDOException $Exception ) {
  echo $Exception->getMessage();
}
//echo "<pre>";
//var_dump($estados);

?>
