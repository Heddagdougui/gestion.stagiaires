<?php
    try{
        $pdo= new PDO('mysql:host=localhost;dbname=stagaires','root','');
    }
    catch (PDOException $e) {
        echo "<p>Erreur: ".$e->getMessage();
        die();
    }
    ?>