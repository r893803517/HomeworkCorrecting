         //验证账号密码格式  
          function IDChange(){  
                var str = loginForm.ID.value;  
                var reg = /[a-zA-Z0-9]{6,16}/;  
                if(!reg.test(str)){
                	IDInfo.style.display = "";
                    IDInfo.innerHTML = "账号为6至14位数字或字母！";  
                    IDInfo.style.color = "red";  
                } else{
                	IDInfo.style.display = "none";
                }
            }  
            function pswChange(){  
                var str = loginForm.psw.value;  
                var reg = /^[x00-x7f]+$/;  
                if(!(reg.test(str) && str.length>5 && str.length<17)){ 
                	IDInfo.style.display = "";
                      pswInfo.innerHTML = "密码必须是6至12位！";  
                    pswInfo.style.color = "red";   
				}else{
                	IDInfo.style.display = "none";
                }
            }  