<?php

$hote='localhost';
$login='root';
$pass='root';
$bd='blog';

@mysql_pconnect('localhost','root','root')
		or die("impossible de se connecter au serveur de bases de données.");
@mysql_select_db('blog')
		or die("Impossible de se connecter a la base de données");
?>
