<?php
    //Register user
    function register($credentials){
        $db = connect();
        $statement = $db->prepare("
            INSERT INTO users (name, username, email, password, gender) 
            VALUES (:name, :user, :email, :pass, :gender)"
        );

        $statement->bindValue(':name', $credentials['name']);
        $statement->bindValue(':user', $credentials['username']);
        $statement->bindValue(':pass', $credentials['password']);
        $statement->bindValue(':email', $credentials['email']);
        $statement->bindValue(':gender', $credentials['gender']);

        if ($statement->execute()) {
            return true;
        }else{
            return false;  
        }
    }

    function login($credentials){
        $db = connect();
        $statement = $db->prepare("SELECT * FROM users WHERE (email OR username) = :user");  
        $statement->bindValue(':user', $credentials['username']);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_OBJ);

        if (password_verify($credentials['password'], $user->password)) {
            registerSession($user);
            return $user;
        }else{
            return false;  
        }
    }

    function registerSession($user){
        session_start();
        session_regenerate_id(true);

        $_SESSION['email'] = $user->email;
        $_SESSION['username'] = $user->username;
    }