
<?php
try {
  $bd = new PDO('mysql:host=yoannchebijpo.mysql.db;dbname=yoannchebijpo;charset=utf8', 'yoannchebijpo', 'Pokemon37');
   $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    $msg = 'Erreur PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    error_log($msg);
    die("La base de données ne répond pas.");
}
?>
