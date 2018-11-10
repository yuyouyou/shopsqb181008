<?php
      
       $C_Patch=$_SERVER['DOCUMENT_ROOT'];//获取网站根目录
       $config = require($C_Patch."/Application/Common/Conf/db.php");
	   $host=$config[DB_HOST];
	   $dbname=$config[DB_NAME];
	   $dbuser=$config[DB_USER];
	   $dbpsw=$config[DB_PWD];
	   $link = mysqli_connect($host, $dbuser, $dbpsw); 
	   $linkmysql=mysqli_select_db($link,$dbname);
    

$sql="select wangz,maxnum from ty_souquan where id=0";
$yanshi=mysqli_query($link,$sql);
$ysxs=mysqli_fetch_array($yanshi);
$sqwangz=$ysxs['wangz'];
$maxnum=$ysxs['maxnum'];
$maxnum=--$maxnum;



$sqlsq = "update ty_souquan set maxnum='$maxnum'";
$aaaa=mysqli_query($link,$sqlsq);
$sss=mysqli_close($link);
$url=md5($_SERVER[HTTP_HOST]);
$bedi01="localhost";
$bedi02="127.0.0.1";
/*******************************************************************/
if (!(($url==$sqwangz)||($maxnum>=1)||($url==md5($bedi01))||($url==md5($bedi02)))){
	 echo '<script>url="http://%77%79%75%6e%31%36%38%2e%74%61%6f%62%61%6f%2e%63%6f%6d";window.location.href=url;</script>';
	 return;}
	  
	 
	 

	 
?>