<?php
session_start();

$bd = new PDO('mysql:host=yoannchebijpo.mysql.db;dbname=yoannchebijpo;charset=utf8', 'yoannchebijpo', 'Pokemon37');
if (!empty($_GET['id']) AND $_GET['id']>0 )
{
 $getid = intval($_GET['id']);
 $req = $bd -> prepare("UPDATE profil SET supprime=? WHERE id=?");
 $req->execute(array(1,$getid));
 header('Location: ../profil.php');
}




 ?>
