<?php
class Model {
   /*
        Constructor for connection to database.
    */
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function getAll() {
        $sql = 'select * from pets;';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q));
        if (!$success) {
            trigger_error($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
    
    public function getFound() {
        $sql = 'select * from pets where found=1;';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q));
        if (!$success) {
            trigger_error($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }     
    }
    
    public function getLost() {
        $sql = 'select * from pets where found=0;';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q));
        if (!$success) {
            trigger_error($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }     
    }
    
    public function getById($id) {
        $sql = 'select * from pets where pet_id=?;';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($id));
        if (!$success) {
            trigger_error($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }   
    }
}
?>