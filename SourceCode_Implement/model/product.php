<?php
    require_once("./core/Database.php");
    class ProductModel {
        public $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getallproduct() {
            
            $conn = $this->db->conn;
            $sql="SELECT * FROM tbl_sanpham";
            $result = mysqli_query($conn, $sql);
            // $kq = $result->fetch_array();
            return $result;
        }
      
        public function insertproduct($category_id, $sanpham_name, $sanpham_chitiet, $sanpham_mota, $sanpham_gia,
         $sanpham_giakm, $sanpham_hot, $sanpham_soluong, $img) {
            // prepare the SQL query
            $query = "INSERT INTO tbl_sanpham (category_id, sanpham_name, sanpham_chitiet, sanpham_mota, sanpham_gia, sanpham_giakm, sanpham_hot, 
            sanpham_soluong, sanpham_img) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
            // prepare the statement
            $stmt = $this->db->conn->prepare($query);
            
            // bind the parameters
            $stmt->bind_param("sssssssss", $category_id, $sanpham_name, $sanpham_chitiet, $sanpham_mota, $sanpham_gia, $sanpham_giakm, $sanpham_hot, 
            $sanpham_soluong, $img);
    
            // execute the statement
            $stmt->execute();
    
            // check if the insert was successful
            if ($stmt->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function updateproduct($sanpham_id, $category_id, $sanpham_name, $sanpham_chitiet, $sanpham_mota, $sanpham_gia, $sanpham_giakm, $sanpham_hot, 
        $sanpham_soluong, $img) {
            // prepare the SQL query
            $query = "UPDATE tbl_sanpham SET category_id = ?, sanpham_name = ?, sanpham_chitiet = ?, sanpham_mota = ?, sanpham_gia = ?, sanpham_giakm = ?, sanpham_hot = ?, 
            sanpham_soluong = ?, sanpham_img = ? WHERE sanpham_id = ?";
    
            // prepare the statement
            $stmt = $this->db->conn->prepare($query);
            
            // bind the parameters
            $stmt->bind_param("ssssssssss", $category_id, $sanpham_name, $sanpham_chitiet, $sanpham_mota, $sanpham_gia, $sanpham_giakm, $sanpham_hot, 
            $sanpham_soluong, $img, $sanpham_id);
    
            // execute the statement
            $stmt->execute();
    
            // check if the insert was successful
            if ($stmt->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
?>