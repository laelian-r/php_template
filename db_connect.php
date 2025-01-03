<?php
    try {
        $host = "localhost";
        $dbname = "openclassroom_mvc_blog";
        $dbuser = "root";
        $dbpassword = "";
        $db = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie";
    } catch (PDOException $e) {
        echo "Échec de la connexion: " . $e->getMessage();
    }
?>