<?php
$host       = "localhost";
$username   = "CISC332";
$password   = "Boston123";
$dbname     = "conference_db";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>