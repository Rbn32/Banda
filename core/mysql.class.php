	<?php 

class mysql{

	public $db;
	
	function __construct(){
		$this->connect("localhost", "mousiqua", "root", "");
	}
	function connect($host, $dbname, $user, $pass){
		$this->db = new PDO("mysql:host=$host;dbname=$dbname",$user, $pass, 
			
			array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_PERSISTENT => true)
		);	
	}
	
	function read($sql){
		
		$result = $this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}

	function update($sql){

		return $this->db->query($sql);
	}

	function delete($sql){

		return $this->db->query($sql);
	}

	function save($sql){

		return $this->db->query($sql);
	}

}

 ?>