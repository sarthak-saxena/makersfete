<?php
if(isset($_POST["sub"]))
{
	session_start();
	$d=0;
	$a=0;
$name=$_POST["em"];
$pass=$_POST["pa"];
$con=mysql_connect("p3plcpnl0328.secureserver.net","makers","makers");
$db=mysql_select_db('makers',$con);
$result=mysql_query("SELECT*FROM registration") or die(mysql_error());
while($row=mysql_fetch_array($result))
{
$e=$row['username'];
$p=$row['password'];


if($e==$name&&$p==$pass)
{$d=1;
$_SESSION['name']=$e;

	
}

}
if($d==1){header("location:inside.php");}
else{$a=1;}






}
?>
<html>

<head>
<title>admin page</title>
</head>
<body>
<div id="admin">


<div id="detail">
<form method="post">
Username<input type="text" name="em" required/><br /> Password:<input type="password" name="pa" required />
<input type="submit" name="sub" value="login" />
</form>
</div>
       

</div>
</body>

<html>


