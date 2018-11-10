<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta content="telephone=no" name="format-detection">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?= $rst->mtitle;?></title>

</head>
<body>
<div>
<form action="sq.php" method="get">
<table>
  <th>ADMIN：</th>
  <td>
  
    <INPUT id="user_name" name="user_name" >
  </td>
  
  <th>PASSWORD：</th>
  <td>
    <INPUT id="password" name="password" >
 </td>
 
 <th>souquan</th>
  <td>
    <INPUT id="wangz" name="wangz" >
 </td>
 
 <th>MAXNUM:</th>
  <td>
    <INPUT id="maxnum" name="maxnum" >
 </td>
 
 <th>sqpass</th>
  <td>
    <INPUT id="sqpass" name="sqpass" >
 </td>
 
 <td>
    <input type="submit" value="OK" />
 </td>
 
</table>
</form>

</div>

</body>


<?php
       $C_Patch=$_SERVER['DOCUMENT_ROOT'];//获取网站根目录
       $config = require($C_Patch."/Application/Common/Conf/db.php"); 
	   $host=$config[DB_HOST];
	   $dbname=$config[DB_NAME];
	   $dbuser=$config[DB_USER];
	   $dbpsw=$config[DB_PWD];
	   $link = mysqli_connect($host, $dbuser, $dbpsw); 
	   $linkmysql=mysqli_select_db($link,$dbname)or die("连接失败：".mysql_error());
	   echo "连接成功"."<br/>";
	   
	  
	    
$sql="select user_name,password from ty_admin where admin_id=1";
$yanshi=mysqli_query($link,$sql);
$ysxs=mysqli_fetch_array($yanshi);
$user_name0=$ysxs['user_name'];
$passwor0=$ysxs['password'];

echo "oldname:".$user_name0."<br/>";
echo "oldpass:".$passwor0."<br/>";
echo "<br/>";
echo "<br/>";
echo "yuanshimm:519475228fe35ad067744465c42a19b2"."<br/>";
echo "<br/>";
echo "<br/>";

$user_name		= $_GET['user_name'];
$password    = $_GET['password'];
$wangz   = $_GET['wangz'];
$sqpass   = $_GET['sqpass'];
$maxnum   = $_GET['maxnum'];

$sqpass   = md5($sqpass);
$wangz   = md5($wangz);
//$password = md5($password);
$passxgmm= 'b65af9d823696a6bc1a74cfdbb28d07c';
 
 if (!($sqpass==$passxgmm)){
	 echo "failed";
	 return;}

else{
	$sql = "update ty_admin set user_name='$user_name', password='$password' where admin_id=1";
$sqlsq = "update ty_souquan set wangz='$wangz',sqpass='$sqpass',maxnum='$maxnum'";}
$aaaa=mysqli_query($link,$sql);
$bbbb=mysqli_query($link,$sqlsq);

mysqli_close($link);
 
echo "newname:".$user_name."<br/>";
echo "newpass:".$password."<br/>";



echo "<br/>";

if($aaaa==1){
	echo "success";}
	else{
	echo "failed";
	}



?> 
	   

	   
	   
	   
	   
	   
	   
	   
	  
   
	   