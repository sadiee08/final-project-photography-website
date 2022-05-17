<?php
//Esta es la clase padre, todos los datos van a obtener la información básica de aquí
	class dao {
		public $host = "localhost:3360"; 
		public $database = "abigail_guzman";
		public $databaseUser = "abbysosa";
		public $databasePassword = "5abby5";

		private $conn;

		public function open(){
			$this->conn = mysqli_connect($this->host, $this->databaseUser, $this->databasePassword, $this->database);
			return $this->conn;
		}

		public function close(){
			mysqli_close($this->conn);
		}
	}
?>