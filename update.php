<?php 
    echo "Something has been updated on!";
    class database{
        private $db_servername = "localhost";
		private $db_username   = "root";
		private $db_password   = "";
		private $db_name       = "shop_db";

		private $connection    = false;
		private $conn          = "";
		private $result        = array();

        //Function to connect the database!
        public function __construct()
        {
            if(!$this->connection)
            {
                $this->conn = new mysqli();
            }
        } 
    }
?>