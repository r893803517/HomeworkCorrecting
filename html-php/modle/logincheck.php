<?php  
	header("Content-type: text/html; charset=utf-8");
	include '../DBconn/dbutils.php';
    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")  
    {  
        $id = $_POST["ID"];  
        $psw = $_POST["psw"];
        if($id == "" || $psw == "" )  
        {  
            echo "<script>alert('请输入用户名和密码！'); history.back(-1);</script>";  
        }else{
        	if(!preg_match("^[a-zA-Z0-9]{6,14}$^",$id)){
        		echo "<script>alert('账号为6到14位数字或字母'); history.back(-1);</script>";  
        	}
        	if(!preg_match("/^\S{6,12}$/",$psw)){
        		echo "<script>alert('密码长度为6到12'); history.back(-1);</script>";  
        	}
        }  

		if(isset($_REQUEST['authcode'])){
		    session_start();
		    //strtolower()小写函数
		    if(strtolower($_REQUEST['authcode']) != $_SESSION['authcode']){
					echo "<script>alert('验证码错误！'); history.back(-1);</script>";
				}
		    exit();
		  }
		$classifications = isset($_POST["classifications"])?$_POST["classifications"]:0; 
		
		if($classifications === "学生"){
			//查询用户合法性
			$sql = 'select * from student where id = ?';
			$type = 's';		
			if(!query($sql,$type,$id)){
				echo "<script>alert('用户不存在'); history.back(-1);</script>"; 
			}
		} 
		else if($classifications === "教师"){
			//查询用户合法性
			$sql = 'select * from teacher where id = ?';
			$type = 's';		
			if(!query($sql,$type,$id)){
				echo "<script>alert('用户不存在'); history.back(-1);</script>"; 
			}
		}
	}
	else{
		 //echo "<script>alert('提交未成功！'); history.back(-1);</script>";  
	}

?> 