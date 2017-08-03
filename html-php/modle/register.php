
<!DOCTYPE html>
<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
<form action="regcheck.php" method="post">  
           账号：<input type="text" name="ID"/>  
    <br/>  
           姓名： <input type = "text" name = "name"/>
    <br />
           密码： <input type="password" name="psw"/>  
    <br/>  
    确认密码：<input type="password" name="confirm"/>  
    <br/>
    	用户类型： 学生<input type="radio" name = "classifications" value="学生">
		教师<input type="radio" name="classifications" value="教师">  
	<br/>
	<br />
	<p>验证码: <img id="captcha_img" border='1' src='../utils/validatepic.php?r=echo rand(); ?>' style="width:100px; height:30px" 
		    	onclick = "this.src = '../utils/validatepic.php?t='+Math.random()"/>
		    	 <P>请输入验证码:<input type="text" name='authcode' value=''/></p>
	<br />
    <input type="Submit" name="Submit" value="注册"/>  
</form>  