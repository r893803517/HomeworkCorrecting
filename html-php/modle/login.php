<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
		<form action="logincheck.php" method="post">  
		    账号：<input type="text" name="ID" />  
		    <br />  
		    密码：<input type="password" name="psw" />  
		    <br /> 
		           请选择用户类型： 学生<input type="radio" name = "classifications" value="学生">
		           		教师<input type="radio" name="classifications" value="教师">
		     <br /><br />
		    <p>验证码: <img id="captcha_img" border='1' src='../utils/validatepic.php?r=echo rand(); ?>' style="width:100px; height:30px" 
		    	onclick = "this.src = 'html-php/utils/validatepic.php?t='+Math.random()"/>
		    <!-- <a href="javascript：void(0)" onclick="this.src='html-php/utils/validatepic.php?r='+Math.random()">换一个?</a> -->
		  </p>
		  <P>请输入验证码:<input type="text" name='authcode' value=''/></p>
		   <br />
		   <input type="submit" name="submit" value="登陆" />  
		     
		    <a href="register.php">注册</a>  
		</form>  

	</body>
</html>