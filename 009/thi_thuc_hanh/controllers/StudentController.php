<?php
include_once 'models/Student.php';
class StudentController {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objStudent = new Student();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objStudent->all();

        include_once 'views/students/index.php';
    }
        // Goi toi trang them moi
        public function create(){
            $objStudent = new Student();
            // Model thao tac voi CSDL, tra ve controller
            $items = $objStudent->all();
    
            // Goi view
            include_once 'views/students/create.php';
        }
        // Xu ly them moi
        public function store(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            // Lay du lieu _REQUEST gan vao mang data
            $data = [
                'name' => $_REQUEST['name'],
                'class' => $_REQUEST['class'],
                'date' => $_REQUEST['date'],
                'gender' => $_REQUEST['gender'],    
                'information' => $_REQUEST['information']
            ];
           
            // Goi model
            $objStudent = new Student();
            $objStudent->save($data);

            // Chuyen huong ve trang danh sach
            header("Location: index.php?controller=student&action=index");
            die();
        }

        // Goi toi trang chinh sua
        public function edit(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objStudent = new Student();
            $items = $objStudent->find($id);
            // truyen xuong view
            include_once 'views/students/edit.php';
        }
    
        // Xử lý chỉnh sửa
        public function update(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
    
            $id = $_REQUEST['id'];
            // Lấy dữ liệu từ _REQUEST gán vào mảng data
            $data = [
                'name' => $_REQUEST['name'],
                'class' => $_REQUEST['class'],
                'date' => $_REQUEST['date'],
                'gender' => $_REQUEST['gender'],    
                'information' => $_REQUEST['information']
            ];
            // Gọi model
            $objStudent = new Student();
            $objStudent->update($id,$data);
    
            // Chuyển hướng về trang danh sách
            header("Location: index.php?controller=student&action=index ");
            die();
        }
    
        public function destroy(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objStudent = new Student();
            $objStudent->delete($id);
    
            // Chuyển hướng về trang danh sách
            header("Location: index.php?controller=student&action=index ");
            die();
        }
}