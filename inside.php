<?php
session_start();
$d=0;
$a=$_SESSION['name'];
if(empty($a))
{
	header("location:admin.php");
	
	
}
else
{$d=1;}

?>



<?php if($d==1){echo "hello ".$a;} ?>
<br>
<form method="post">
<input type="submit" name="logout" value="logout" />
</form>
<?php if(isset($_POST['logout'])){session_destroy();header("location:admin.php");} ?>