<?php
/*Noy and Aline*/


    require_once("dbClass.php");

    class shoe{
        private $id;
        private $model;
        private $price;
  
        /*get's functions*/
        public function getId(){
            return $this->id;
        }
        
        public function getModel(){
            return $this->model;
        }
        
        public function getPrice(){
            return $this->price;
        }
        /*insert serial number to data base*/
        public function insert($id ,$model, $price){
            $conn = new dbClass();
            $conn->connect();
            
            $sql = "INSERT INTO `shoes` (`id`, `model`, `price`) 
                    VALUES ('$id', '$model', '$price')";
            
            $conn->getConnection()->exec($sql);
            $conn->disconnect();
        }


        /*check if item exist in data base-if exist return true else false*/
         public static function checkId($id){
            $conn = new dbClass();
            $conn->connect();
             
            $sql = "SELECT `id` FROM `shoes` WHERE `id`='$id'";
            
            $result = $conn->getConnection()->query($sql);
            $row =  $result->fetch(PDO::FETCH_ASSOC);
            $conn->disconnect();
             
            if ($id == $row['id']){
                return true;
            }else{
                return false;
            }
        }
     
       /*if product exist wil be removed from  data base*/
        public function delete($id){
            $conn = new dbClass();
            $conn->connect();
            
            $sql = "DELETE FROM `shoes` WHERE `id` = $id";
            
            $conn->getConnection()->exec($sql);
            $conn->disconnect();
        }
    }
?>