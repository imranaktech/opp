
<?php
include ('../model/model.php');
$obj=new model();

if(isset($_GET['idd']))
{
	$id=$_GET['idd'];
	 $mydata=$obj->select_all2('admin_login',$id);
	 $data=mysqli_fetch_array($mydata);
	 $name=$data['email'];
	 $password=$data['password'];
	    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="../controller/controller.php" method="POST">
		 
	     	 F-Name:<br><input type="text" name="email" value="<?php echo $name ?>"><br>
		     S-Name:<br><input type="text" name="password" value="<?php echo $password?>"><br><br>
		     <input type="hidden" name="id" value="<?php echo $_GET['idd'];?>">
		<input type="submit" name="upload" value="upload">
	</form>
</body>
</html>