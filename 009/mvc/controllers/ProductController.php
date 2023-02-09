<?php
include_once 'models/Product.php';
class ProductController extends Controller {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objProduct = new Product();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objProduct->all();

        // Truyen xuong view
        $params = [
            'items' => $items

        ];

        $this->view('products/index.php', $params);
    }
        // Goi toi trang them moi
        public function create(){
            // Goi view
            $this->view('products/create.php');
        }
        // Xu ly them moi
        public function store(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            // Lay du lieu _REQUEST gan vao mang data
            $data = [
                'MAHANGSX_id' => $_REQUEST['MAHANGSX_id'],
                'TenSp' => $_REQUEST['TenSp'],
                'SoLuong' => $_REQUEST['SoLuong'],
                'GiaN' => $_REQUEST['GiaN'],
                'GiaB' => $_REQUEST['GiaB'],
                'Anh' => $_REQUEST['Anh'],
                'mota' => $_REQUEST['mota']
            ];
           
            // Goi model
            $objProduct = new Product();
            $objProduct->save($data);

            // Chuyen huong ve trang danh sach
            header("Location: index.php?controller=product&action=index");
            die();
        }

        // Goi toi trang chinh sua
        public function edit(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objProduct = new Product();
            $item = $objProduct->find($id);
            // truyen xuong view
            include_once 'views/products/edit.php';
        }
    
        // Xử lý chỉnh sửa
        public function update(){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
    
            $id = $_REQUEST['id'];
            // Lấy dữ liệu từ _REQUEST gán vào mảng data
            $data = [
                'MAHANGSX_id' => $_REQUEST['MAHANGSX_id'],
                'TenSp' => $_REQUEST['TenSp'],
                'SoLuong' => $_REQUEST['SoLuong'],
                'GiaN' => $_REQUEST['GiaN'],
                'GiaB' => $_REQUEST['GiaB'],
                'Anh' => $_REQUEST['Anh'],
                'mota' => $_REQUEST['mota']
            ];
            // Gọi model
            $objProduct = new Product();
            $objProduct->update($id,$data);
    
            // Chuyển hướng về trang danh sách
            header("Location: index.php?controller=product&action=index ");
            die();
        }
    
        public function destroy(){
            $id = $_REQUEST['id'];
            // Gọi model
            $objProduct = new Product();
            $objProduct->delete($id);
    
            // Chuyển hướng về trang danh sách
            header("Location: index.php?controller=product&action=index ");
            die();
        }
}