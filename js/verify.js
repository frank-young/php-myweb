window.onload = function(){ 
	var regForm = document.getElementById('regForm');
	var allinput = regForm.getElementsByTagName('input');
	var name=allinput[0];
	var pass1=allinput[1];
	var pass2=allinput[2];
	var email=allinput[3];
	var allspan = regForm.getElementsByTagName('span');//所有的提示
	var name_msg=allspan[1];
	var pass1_msg=allspan[3];
	var pass2_msg=allspan[5];
	var email_msg=allspan[7];
	/*success*/
	var name_success=document.getElementById('inputUser');
	var pass1_success=document.getElementById('inputPassword1');
	var pass2_success=document.getElementById('inputPassword2');
	var email_success=document.getElementById('inputEmail');
	var name_span=allspan[0];
	var pass1_span=allspan[2];
	var pass2_span=allspan[4];
	var email_span=allspan[6];
	// nosub=[];//用于判断表单是否提交
//用户名  交互设计
	name.onfocus=function(){
		name_msg.style.display="block";
		name_msg.innerHTML='5-25个字符，字母，汉字，数字';
	}//得到焦点
	name.onkeyup = function(){ 
	}//键盘抬起时
	name.onblur = function(){ 
		//含有非法字符
		var re = /[^\w\u4e00-\u9fa5]/g;//匹配非法字符
		if(re.test(this.value)){ //判断返回值  |true，含有非法字符；
			name_msg.innerHTML='含有非法字符！';
			error(name_success,name_span);
		}
		//不能为空
		else if(this.value == ""){ 
			name_msg.innerHTML='不能为空！';
			wraning(name_success,name_span);
		}
		//长度超过25个字符
		else if(this.value.length >25){ 
			name_msg.innerHTML='长度超过25个字符！';
			error(name_success,name_span);
		}
		//长度小于6个字符
		else if(this.value.length <6){ 
			name_msg.innerHTML='长度小于6个字符！';
			error(name_success,name_span);
		}
		//OK  
		else{ 
			name_msg.innerHTML='OK！';
			success(name_success,name_span);
			// nosub[0] = true;
		}

	}//失去焦点时
//密码
	pass1.onfocus = function(){ 
		pass1_msg.style.display="block";
		pass1_msg.innerHTML='6-16个字符，使用字母加数字或符号的组合密码';
	}
	pass1.onkeyup = function(){
	}
	pass1.onblur = function(){ 
		var m=findStr(pass1.value,pass1.value[0]);
		var cou = /[^\d]/g;//匹配非数字的符号
		var word = /[^a-zA-Z]/g;
		//不能为空
		if(this.value==" "){ 
			pass1_msg.innerHTML='不能为空！';
			wraning(pass1_success,pass1_span);
		}
		//不能用相同字符
		else if(m==this.value.length){ 
			pass1_msg.innerHTML='不能为相同字符！';
			error(pass1_success,pass1_span);
		}
		//长度应该为6-16个字符
		else if(this.value.length <6||this.value.length >16){ 
			pass1_msg.innerHTML='长度应该为6-16个字符！';
			error(pass1_success,pass1_span);
		}
		//不能全为数字
		else if(!cou.test(this.value)){ 
			pass1_msg.innerHTML='不能全为数字！';
			error(pass1_success,pass1_span);
		}	
		//不能全为字母
		else if(!word.test(this.value)){ 
			pass1_msg.innerHTML='不能全为字母！';
			error(pass1_success,pass1_span);
		}	
		//OK    
		else{ 
			pass1_msg.innerHTML='OK！';
			pass2.removeAttribute('disabled');
			success(pass1_success,pass1_span);
			// nosub[1] = true;
		}
	}

//确认密码
	pass2.onblur = function(){ 
		if(this.value!=pass1.value){ 
				pass2_msg.innerHTML='两次输入的密码不一致';
				error(pass2_success,pass2_span);
		}
		else{ 
			pass2_msg.innerHTML='OK！';
			success(pass2_success,pass2_span);
			// nosub[2] = true;
		}
	}
	email.onfocus = function(){ 
	  	email_msg.style.display="block";
	 	email_msg.innerHTML="请输入你的邮箱";
	 }//得到焦点
	email.onblur = function(){ 
	 	var eml = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 	if(eml.test(this.value)){ 
	 		email_msg.innerHTML="OK!";
			success(email_success,email_span);
			// nosub[3] = true;
	 	}else if(this.value ==""){ 
	 		email_msg.innerHTML="不能为空！";
	 		wraning(email_success,email_span);
	 	}else{ 
	 		email_msg.innerHTML="邮箱格式不对！";
	 		error(email_success,email_span);
	 	}
	}
	// var num=0;
	// var submit = document.getElementById('submit1');
	// for(var i=0; i<=nosub.length;i++){
	// 	if (nosub[i]==true){
	// 		num++;
	// 	}
	// }
	// if(num=4){
	// 	submit.removeAttribute('disabled');
	// }
		
}
	
// //定义一个判断长度的函数。
// function getLength(str){
// 	return str.replace(/[^\x00-xff]/g,"aa").length;
// }
//定义是否为相同字符的函数
function findStr(str,n){ 
	var tmp=1;
	for (var i =1; i<str.length;i++){
			if(str.charAt(i)==n){
				tmp++;
			}
		}
		return tmp;
}
//OK显示函数
function success(str_success,str_span){
	str_success.setAttribute('class','form-group has-success has-feedback');
	str_span.setAttribute('class','glyphicon glyphicon-ok form-control-feedback');
	str_span.style.display="block";
}
function error(str_success,str_span){
	str_success.setAttribute('class','form-group has-error has-feedback');
	str_span.setAttribute('class','glyphicon glyphicon-remove form-control-feedback');
	str_span.style.display="block";
}
function wraning(str_success,str_span){
	str_success.setAttribute('class','form-group has-warning has-feedback');
	str_span.setAttribute('class','glyphicon glyphicon-warning-sign form-control-feedback');
	str_span.style.display="block";
}