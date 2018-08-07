<?php
include ('../model/model.php');
$obj=new model();
if(isset($_POST['submit']))
{
	$data=array
	(  
     'email'    =>   $_POST['fname'],

     'password' =>   $_POST['sname'],

	);
	$obj->insert_record('admin_login',$data );
}

if(isset($_GET['id']))
{
$id=$_GET['id'];
$obj->delete('admin_login',$id);
header('location:../view/select.php');
}

if(isset($_POST['upload']))
{
	$id=$_POST['id'];
	$request=array
	(
		'email'=>$_POST['email'],
		'password'=>$_POST['password'],
	); 
	$obj->update1('admin_login',$request,$id);
}
  

//   if(isset($_GET['idd']))
// {
// $id=$_GET['idd'];
// $obj->update1('admin_login',$id);
// }
?>