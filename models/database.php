<?php
    // Database parameters
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'quiz');

    // Connection
    function connect(){
        return new PDO(
            "mysql:host=". DB_HOST. ";dbname=".DB_NAME,
             DB_USER, 
             DB_PASS,
        );
    }