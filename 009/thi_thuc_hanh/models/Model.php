<?php
class Model {
    protected $conn;
    // Phuong thuc
    public function __construct(){
        $username   = 'root';
        $password   = '';
        $database   = 'thi_thuc_hanh';
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
        } catch (Exception $e) {
            // echo $e->getMessage();
            echo '<h1>Khong the ket noi CSDL</h1>';
        }
    }
}