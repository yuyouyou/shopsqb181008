<?php
      
/*********************************************************************************************************/	  
	   $link01 = mysqli_connect("47.95.214.69:3306", "souquanym", "MAIuKBx12yrgg0O"); 
	   $linkmysql=mysqli_select_db($link01,"souquanym");
	   
	   $yuming=$_SERVER[HTTP_HOST];
	   
	   $ymscsql="select yuming from ymjl where yuming='".$yuming."'";
	   $zxsql=mysqli_query($link01,$ymscsql);
	   $result = mysqli_num_rows($zxsql);
	  
	  if ($result<=0){
	   
	   
	   $souquanbg="INSERT INTO `ymjl` (`cxname`,`yuming`) VALUES ('tpshop','".$yuming."')" ;
	   $zxsql=mysqli_query($link01,$souquanbg);
	  }
      $ss0=mysqli_close($link01);
/*******************************************************************/
	  
	 
	 

	 
?>