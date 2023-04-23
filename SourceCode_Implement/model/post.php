<?php
    require_once("./core/Database.php");
    class PostModel {
        public $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getallpost() {
            
            $conn = $this->db->conn;
            $sql="SELECT * FROM tbl_post";
            $result = mysqli_query($conn, $sql);
            // $kq = $result->fetch_array();
            return $result;
        }
      
        public function insertpost($title, $detail, $img) {
            // prepare the SQL query
            $query = "INSERT INTO tbl_post (title, detail, img) VALUES (?, ?, ?)";
    
            // prepare the statement
            $stmt = $this->db->conn->prepare($query);
            
            // bind the parameters
            $stmt->bind_param("sss", $title, $detail, $img);
    
            // execute the statement
            $stmt->execute();
    
            // check if the insert was successful
            if ($stmt->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function updatepost($id, $title, $detail, $img) {
            // prepare the SQL query
            $query = "UPDATE tbl_post SET title = ?, detail = ?, img = ? WHERE id = ?";
    
            // prepare the statement
            $stmt = $this->db->conn->prepare($query);
            
            // bind the parameters
            $stmt->bind_param("ssss", $title, $detail, $img, $id);
    
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