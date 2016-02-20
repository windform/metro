$(function(){
	 $("#countdown").countdown();

	 $(".social-wechat").click(function(event) {
	 	basic.wechat();
	 });
});

var basic={
	//微信二维码扫描
	wechat:function(){
		var mask='<div class="mask">'
				        +'<div class="wechat-box">'
				            +'<button class="button square-button">'
				                +'<span class="mif-cross mif-2x"></span>'
				            +'</button>'
				        +'</div>'
				    +'</div>'
		$('body').append(mask);
		$('.mask').animate({opacity:1}, 300);
		$('.wechat-box button').click(function(){
			$('.mask').animate({opacity:0}, 300);
			setTimeout(function(){
				$('.mask').remove()
			},310)
		})
	}
}