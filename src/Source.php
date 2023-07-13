<?php

namespace App;

use App\db;
use PDO;

class Source extends db
{

    //read operation

    public function read()
    {
        $sql = "SELECT *FROM students";
        $statement = $this->pdo->query($sql);
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $students;

    }

    public function create($data)
    {
        $data1 = $data['name'];
        $data2 = $data['email'];
        $sql = "INSERT INTO students(name,email) VALUES('$data1','$data2')";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        header('Location: tableList.php');

    }

    public function edit($tableID)
    {
        $sql = "SELECT *FROM students WHERE id= $tableID";
        $statement = $this->pdo->query($sql);
        $student = $statement->fetch(PDO::FETCH_ASSOC);
        return $student;

    }

    public function update($data)
    {
        $data1 = $data['name'];
        $data2 = $data['email'];
        $data3 = $data['id'];
        $sql = "update students set name='$data1',email='$data2' where id=$data3 ";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        header('Location: tableList.php');

    }



}


?>