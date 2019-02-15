<?php
/*Aline and Noy*/
    class dbClass{
        private $host;
        private $db;
        private $charset;
        private $user;
        private $pass;
        private $opt = array(
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                        );
        private $connection;
       
        public function __construct(string $host="localhost", 
                                    string $db="shoesstore", /*the name of data base*/
                                    string $charset="utf8", 
                                    string $user="root", 
                                    string $pass =""){
            $this->host = $host;
            $this->db = $db;
            $this->charset = $charset;
            $this->user = $user;
            $this->pass = $pass;
        }
        /*connection method*/
        public function getConnection(){
            return $this->connection;
        }
      //connect function        
        public function connect(){
            $dsn = "mysql:
                    host=$this->host;
                    dbname=$this->db;
                    charset=$this->charset";
            $this->connection = new PDO($dsn, $this->user, $this->pass, $this->opt);
        }
 /*disconnect method*/
        public function disconnect(){
            $this->connection = null;
        }
  /*Count supply function, return number of supplyes*/
        public function cntSupply(){
			$this->connect();
			$result=$this->connection->query("SELECT COUNT(id) FROM user");
			$res =$result->fetchAll(PDO::FETCH_ASSOC);
			$this->disconnect();
			return $res[0]['COUNT(id)'];
		}
    }
?>