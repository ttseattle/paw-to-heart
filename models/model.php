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
        $sql = 'select * from pets where lost=1;';
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
    
    public function getFoundBySpecies($species) {
        if (strcmp("all", $species) == 0) {
            $sql = 'select * from pets where found=1;';
        } else {
            $sql = 'select * from pets where found=1 and species=?;';
        }
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($species));
        if (!$success) {
            trigger_error($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }  
    }
    
    public function getLostBySpecies($species) {
        if (strcmp("all", $species) == 0) {
            $sql = 'select * from pets where lost=1;';
        } else {
            $sql = 'select * from pets where lost=1 and species=?;';
        }
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($species));
        if (!$success) {
            trigger_error($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }  
    }
}
?>