<?php
include_once 'models/Model.php';
class Student extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `students`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
        $items = $stmt->fetchAll();
        
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `students` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
  
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $name = $data['name'];
        $class = $data['class'];
        $date = $data['date'];
        $gender = $data['gender'];
        $information = $data['information'];
        $sql = "INSERT INTO `students` ( `name`, `class`, `date`, `gender`,`information`) VALUES ( '$name', '$class', '$date', '$gender','$information')";
        // var_dump($sql);
        // echo '<pre>';
        // print_r($data);
        // die();
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $class = $data['class'];
        $date = $data['date'];
        $gender = $data['gender'];
        $information = $data['information'];

        $sql = "UPDATE `students` SET 
        `name` = '$name', 
        `class` = '$class', 
        `date` = '$date', 
        `gender` = '$gender',  
        `information` = '$information'  
        WHERE `students`.`id` = $id";

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM students WHERE id = $id";
        //Debug sql
        // var_dump($sql);

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}