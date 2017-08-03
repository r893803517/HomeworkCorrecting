<?php

	$dbConf = include 'dbconfig.php';
	
	class conn{
		static public $conn = null;
		static public function getconn(){
			if(self::$conn == null){
				global $dbConf;  
			
			    self::$conn=mysqli_connect($dbConf['mysqlhost'],$dbConf['user'],$dbConf['psw'],$dbConf['dbName'],$dbConf['port']) or die('打开失败');  
			    mysqli_set_charset(self::$conn,$dbConf['charSet']);//设置编码  
			   }
		    return self::$conn;
		}  
		static public function conn_close(){  
	    	mysqli_close(self::$conn);  
		}
		
	} 
	
	
?>