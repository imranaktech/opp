<?php
include ('../db/conn.php');
class model extends db
{
	protected $query;
	public function insert_record($table_name,$data )
	{
		$keys=implode(",", array_keys($data));
		$value=implode("','", array_values($data));
		$this->query="INSERT INTO $table_name($keys) VALUES ('$value') ";
		$run=mysqli_query($this->conn,$this->query);
		if($run)
		{
			echo '<script language="javascript">alert ("Data inserted Succefully")</script>';
			 
		}
		return false;

	}

	// public function select_all_array($table_name)
	// {
 //      $this->query="SELECT * FROM $table_name";
 //      $run=mysqli_query($this->conn,$this->query);
 //      $data=mysqli_fetch_array($run);
 //      	return ($data);
                   
	// }

	public function select_all($table_name)
	{
      $this->query="SELECT * FROM $table_name";
      $run=mysqli_query($this->conn,$this->query);
      	return ($run);
          
          
	}

	public function select_all2($table_name,$_id)
	{
      $this->query="SELECT * FROM $table_name where id='$_id'";
      $run=mysqli_query($this->conn,$this->query);
      	return ($run);
          
          
	}

	 public function delete($table_name,$id)
	 {
	 	$this->query="DELETE FROM $table_name WHERE id='$id' ";
        $run=mysqli_query($this->conn,$this->query);
	 }


	 public function update1($table_name,$request,$id)
	 
	 {
	 	 foreach ($request as $key => $row) 
	     {
	     $var[] = $this->query="UPDATE $table_name SET $key = '$row' where id='$id'";
         $run=mysqli_query($this->conn,$this->query);	
	     }
	     
	 }
}
?>