<?php
    // Create Teacher
    function createTeacher($data){
        $statement = connect()->prepare("
            INSERT INTO teachers (uuid, name, email, password, gender) 
            VALUES (:uuid, :name, :email, :pass, :gender)"
        );

        $statement->bindValue(':uuid', $data['uuid']);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':email', $data['email']);
        $statement->bindValue(':pass', $data['password']);
        $statement->bindValue(':gender', $data['gender']);

        return $statement->execute();
    }

    // Show Teacher
    function showTeacher($id){
        $statement = connect()->prepare("SELECT * FROM teachers WHERE :col = :info");

        $statement->bindValue(':col', 'id');
        $statement->bindValue(':info', $id);

        $teacher = $statement->fetch(PDO::FETCH_OBJ);

        return $teacher;
    }

    //Update Teacher
    function updateTeacher($data){
        $statement = connect()->prepare("
            UPDATE teachers SET name = :name, email = :email, gender = :gender
            WHERE :col = :info"
        );

        $statement->bindValue(':col', 'id');
        $statement->bindValue(':info', $data['id']);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':email', $data['email']);
        $statement->bindValue(':gender', $data['gender']);

        return $statement->execute();
    }

    // Delete Teacher
    function deleteTeacher($id){
        $statement = connect()->prepare("DELETE FROM teachers WHERE :col = :info");

        $statement->bindValue(':col', 'id');
        $statement->bindValue(':info', $id);

        return $statement->execute();
    }