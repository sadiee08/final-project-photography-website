<?php
  require_once("./dao/dao.php");
	class contact extends dao {
		public $id = 0;
		public $name = "";
		public $email = "";
		public $number = "";
		public $service = "";		
		public $note = "";

		public function addContact($name, $email, $number, $service, $note){
			$result = false;
			$conn = $this->open();
        if ($conn->connect_error){
          echo "Error de conexión a basa de datos".$conn->connect_error;
        } else {
					//declaro la consulta a hacer
					$query = "INSERT INTO contact_list (name, email, number, service, note) VALUES ('".$name."', '".$email."', '".$number."','".$service."', '".$note."')";
					//ejecuto la consulta y el resultado lo pongo en el nuevo arreglo de myUsers
					$myContact = $conn->query($query);	
					$result = true;
			}
			$this->close(); 
			return $result;	
		}
	}
?>