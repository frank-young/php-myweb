window.onload = function(){ 
	var obtn = document.getElementById('btn');
	var height = document.documentElement.clientHeight;//获取可视区域高度
	var timer = null;
	window.onscroll = function(){ 
		var a = true;
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;//获取滚动条的位置，返回数值,,谷歌支持后面的
		if (osTop>=height){ 
			obtn.style.display="block";
		}else{ 
			obtn.style.display="none";
		}
		if (!a){ 
			clearInterval(timer);
		}
	}
	obtn.onclick = function(){ 
		//设置定时器
		timer = setInterval(function(){ 
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;//获取滚动条的位置，返回数值,,谷歌支持后面的
		var speed = Math.floor(-osTop /6);

		document.documentElement.scrollTop = document.body.scrollTop = osTop + speed;
		
			if(osTop ==0){ 
				clearInterval(timer);
			}
		},30)//动画，定时器	
	}
}


