<?php
	//注册检测
	header("Content-type: text/html; charset=utf-8");
	include '../DBconn/dbutils.php';
    if(isset($_POST["submit"]) && $_POST["submit"] == "注册"){
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
        		echo "<script>alert('密码格式不匹配'); history.back(-1);</script>";  
        	}
        } 
        if($classifications === "学生"){
			//查询用户合法性
			$sql = 'select * from student where id = ?';
			$type = 's';		
			if(query($sql,$type,$id)){
				echo "<script>alert('用户已存在'); history.back(-1);</script>"; 
			}else{
				//注册操作
			}
		} 
		else if($classifications === "教师"){
			//查询授权码 资格
			if(true){
				
			}
			//查询用户合法性
			$sql = 'select * from teacher where id = ?';
			$type = 's';		
			if(query($sql,$type,$id)){
				echo "<script>alert('用户已存在'); history.back(-1);</script>"; 
			}
			else{
				//注册操作
			}
		} 
    }else{
    	//echo "<script>alert('提交未成功！'); history.back(-1);</script>";  
    }
?>