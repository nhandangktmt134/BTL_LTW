<?php
    require_once("./core/Database.php");
    class CategoryModel {
        public $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getallproduct() {
            
            $conn = $this->db->conn;
            $sql="SELECT * FROM tbl_danhmuc";
            $result = mysqli_query($conn, $sql);
            // $kq = $result->fetch_array();
            return $result;
        }
      
        public function insertproduct($name_danhmuc) {
            // prepare the SQL query
            $query = "INSERT INTO tbl_danhmuc (name_danhmuc) VALUES (?)";
    
            // prepare the statement
            $stmt = $this->db->conn->prepare($query);
            
            // bind the parameters
            $stmt->bind_param("s", $name_danhmuc);
    
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