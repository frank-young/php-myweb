<?php
/**
 * [验证码函数]
 * @param  integer $image_w [图片宽度]
 * @param  integer $image_h [图片高度]
 * @param  integer $length  [验证码长度]
 * @return [type]           []
 */
function getCaptcha($image_w = 100,$image_h = 40,$length=4){
	$image = imagecreatetruecolor($image_w, $image_h);//底图  black
	$bgcolor = imagecolorallocate($image, 255, 255, 255);//创建颜色
	imagefill($image,0,0,$bgcolor);//区域填充
	$captch_code="";
	for($i = 0;$i<$length;$i++){ 
		$fontsize = 6;
		$fontcolor = imagecolorallocate($image, rand(1,120), rand(1,120), rand(1,120));
		$data = 'abcdefghijkmnpqrstuvwxy3456789';//去掉了像1，l 2,z, o 0 等不好识别的字母
		$fonttext = substr($data,rand(0,strlen($data)),1);
		$captch_code .= $fonttext;
		$x = ($i*100/4)+rand(5,10);
		$y = rand(5,10);
		imagestring($image, $fontsize, $x, $y, $fonttext, $fontcolor);
	}
	$_SESSION['captcha'] = $captch_code;
	/*干扰点*/
	for($i=0;$i<200;$i++){ 
		$pointcolor = imagecolorallocate($image,  rand(50,120), rand(50,120),  rand(50,120));//干扰点的颜色
		imagesetpixel($image, rand(0,$image_w), rand(0,$image_h), $pointcolor);//画一个单一像素
	}
	/*干扰线*/
	for($i = 0; $i<3;$i++){
		$linecolor = imagecolorallocate($image,  rand(80,220), rand(80,220),rand(80,220));//干扰线的颜色
		imageline($image,rand(1,$image_w-1),rand(1,$image_h-1),rand(1,$image_w-1),rand(1,$image_h-1),$linecolor);//画一条线段
	}
	header('content-type:image/png');
	imagepng($image);
	imagedestroy($image);
}
