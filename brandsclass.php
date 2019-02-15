<?php
/*Noy and Aline*/

    require_once("dbClass.php");

    class brandsclass{
        
        private $serial;
        private $description;
 
        /*get's functions*/
        public function getSerial(){
            return $serial;
        }
        
        public function getDescription(){
            return $description;
        }
        
		/*set's functions*/
        public function setSerial($serial){
            $this->serial= $serial;
        }
        
        public function setDescription($description){
            $this->description = $description;
        }
        
        /*update  table brands in data base*/  
        public function update($serial="", $description=""){
            $conn = new dbClass();
            $conn->connect();
                
            $sql  = "UPDATE brands SET description = '$description' WHERE serial = '$serial'";
            $conn->getConnection()->query($sql);
            
            $brandsArr = array();
            
            $sql = "SELECT * FROM brands";
            $result = $conn->getConnection()->query($sql);
            
            $brandsArr = $result->fetchall(PDO::FETCH_ASSOC);
            $conn->disconnect();

            return $brandsArr;
        }
    //html visual for slider
        public function slider($item1, $item2, $item3, $item4){
            echo "  <div class=\"slideshow-container\">
                        <div class=\"mySlides\">
                            <div><pre>item id: 1</pre> <br>1 / 4</div>
                                <img src=\"img/brands1.png\"><br><br><br>           
                            <div class=\"text\">$item1</div>
                         </div>

                        <div class=\"mySlides\">
                            <div><pre>item id: 2</pre> <br>2 / 4</div>
                                <img src=\"img/brands2.png\"><br><br><br>  
                            <div class=\"text\">$item2</div>
                        </div>

                        <div class=\"mySlides\">
                            <div><pre>item id: 3</pre> <br>3 / 4</div>
                                <img src=\"img/brands3.png\"><br><br><br>  
                            <div class=\"text\">$item3</div>
                        </div>
                        
                        <div class=\"mySlides\">
                            <div><pre>item id: 4</pre> <br>4 / 4</div>
                                <img src=\"img/brands4.png\"><br><br><br>  
                            <div class=\"text\">$item4</div>
                        </div>

                            <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
                            <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
                    </div><br>

                <span class=\"dot\" onclick=\"currentSlide(1)\"></span> 
                <span class=\"dot\" onclick=\"currentSlide(2)\"></span> 
                <span class=\"dot\" onclick=\"currentSlide(3)\"></span> 
                <span class=\"dot\" onclick=\"currentSlide(4)\"></span> 

            ";
        }
    }
?>