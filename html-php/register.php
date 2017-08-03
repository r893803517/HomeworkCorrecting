
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
           密码： <input type="password" name="password"/>  
    <br/>  
    确认密码：<input type="password" name="confirm"/>  
    <br/>
    	用户类型： 学生<input type="radio" name = "classifications" value="学生">
		教师<input type="radio" name="classifications" value="教师">  
    <input type="Submit" name="Submit" value="注册"/>  
</form>  