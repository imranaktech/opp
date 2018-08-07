<?php
include ('../model/model.php');
$obj=new model();
?>
</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<thead>
	<tr>
		<th>email</th>
		<th>Password</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
           $mydata=$obj->select_all('admin_login');
           while($fetch = mysqli_fetch_array($mydata))
           {
           echo '<tr>
		         <td>'.$fetch['email'].'</td>
		         <td>'.$fetch['password'].'</td>
		         <td><a href="update.php?idd='.$fetch['id'].'"> Edit</a></td>
		         <td><a href="../controller/controller.php?id='.$fetch['id'].'"> Delete</a></td>
	             </tr>';
           }
		?>
	</tbody>

</table>
</body>
</html>