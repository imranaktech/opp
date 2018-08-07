<?php
class db
{
	public $conn;
	protected $server_name='localhost';
	protected $db_port='root';
	protected $db_password='';
	protected $db_name='cms';
	public function __construct() 
	{
      $this->conn=mysqli_connect($this->server_name,$this->db_port,$this->db_password,$this->db_name);
      if($this->conn)
	{
		//echo "Connect Succefully";
	}
	
	} 
	
}

?>