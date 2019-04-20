<?php
 // Kapcsolódás
 $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', 'root',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
?>