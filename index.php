<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<link rel="stylesheet" href="css/index.css">

<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="box">
     <div class="cnt">
        <p id="huanying"><span id="cnt_one">欢迎登录</span><span id="cnt_two" ><a href="html-php/register.php">注册</a></span></p>
        <hr />
        <div style="padding-bottom:10px;">
	      <label class="checkbox-inline" style="padding-left:0px;padding-right:10px;">
		     <input type="radio" name="classifications" id="optionsRadios3" value="option1" checked>学生
	      </label>
	      <label class="checkbox-inline" style="padding-right:10px;">
		     <input type="radio" name="classifications" id="optionsRadios4"  value="option2">教师
	      </label>
        </div>
        <div >
           <form class="context" role="form" method = "post" name = "loginForm">
		      <div class="input-group" >
			      <span class="input-group-addon"><img src="img/icon1.png"></span>
			      <input type="text" name = "ID" class="form-control" placeholder="请输入您的账号" onblur="IDChange()">
		      </div>
		      	<span id="IDInfo" style="color: red;display: none;">账号为6至14位数字或字母！</span>
		      <div class="input-group">
			      <span class="input-group-addon"><img src="img/icon2.png"></span>
			      <input type="text" name = "psw" class="form-control" placeholder="请输入您的密码" onblur="pswChange()">
		      </div>
		      	<span id="pswInfo" style="color: red;display: none;">密码必须是6至12位</span>
		      <div class="input-group" style="position:absolute;">
			      
			      <input type="text" class="form-control" placeholder="请输入验证码" style="position:relative;width:191px;height:33px;">
                   <img id="captcha_img" border='1' src='html-php/utils/validatepic.php?r=echo rand(); ?>' style="width:100px; height:30px" 
		    			onclick = "this.src = 'html-php/utils/validatepic.php?t='+Math.random()"/>
					<span id=""></span>
		      </div><br>
	       </form>
        </div>
        <div style="margin-top:40px;padding-top:20px">
           <input class="form-control btn btn-info" type="button" value="立即登录"/>
        </div>
     </div> 
  </div>
  
 	 <script src="js/index.js"></script>
</body>
</html>
