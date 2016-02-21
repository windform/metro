<?php get_header(); ?>
<header data-role="appbar" class="app-bar navy">
	<div class="container">
		  <a class="app-bar-element branding" href="<?php echo get_option('home'); ?>/">
		    <?php bloginfo('name'); ?>
		  </a>
		  <span class="app-bar-divider">
		  </span>
		  <ul class="app-bar-menu">
		    <li data-flexorderorigin="0" data-flexorder="1"><a href="">首页</a></li>
		    <li data-flexorderorigin="1" data-flexorder="2" class=""><a href=""> 页面架构</a></li>
		    <li data-flexorderorigin="2" data-flexorder="3">
		      <a class="dropdown-toggle" href="">设计前沿</a>
		      <ul data-role="dropdown" class="d-menu">
		        <li><a href="">网页设计</a></li>
		        <li><a href="">移动设计</a></li>
		      </ul>
		    </li>
		    <li data-flexorderorigin="3" data-flexorder="4">
		      <a class="dropdown-toggle" href="">前端开发</a>
		      <ul data-role="dropdown" class="d-menu">
		      	<li><a href="">html、css</a></li>
		      	<li><a href="">Javascript</a></li>
		      	<li><a href="">nodeJs</a></li>
		      	<li><a href="">AngularJs</a></li>
		      </ul>
		    </li>
		    <li data-flexorderorigin="4" data-flexorder="5"><a href="">后台编程</a></li>
		    <li data-flexorderorigin="5" data-flexorder="6">
		      <a class="dropdown-toggle" href="">摄影后期</a>
		      <ul data-role="dropdown" class="d-menu">
		        <li><a href=""> 单反天堂</a></li>
		        <li><a href=""> After Effects</a></li>
		        <li><a href="">premiere</a></li>
		      </ul>
		    </li>
		  </ul>
	  </div>
</header>

<div class="container">
	<div class="grid hot-grid">
		<div class="row cells3">
			<div class="cell">
				<div class="row">
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/images/hot1.jpg" alt="">
						<h4>跨平台跨设备 Office 365 为用户提升移动生产力</h4>		
					</a>
				</div>
				<div class="row">
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/images/hot2.jpg" alt="">
						<h4>跨平台跨设备 Office 365 为用户提升移动生产力</h4>		
					</a>
				</div>
			</div>
			<div class="cell">
				<div class="row">
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/images/hot3.jpg" alt="">
						<h4>跨平台跨设备 Office 365 为用户提升移动生产力</h4>		
					</a>
				</div>
				<div class="row">
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/images/hot4.jpg" alt="">
						<h4>跨平台跨设备 Office 365 为用户提升移动生产力</h4>		
					</a>
				</div>
			</div>
			<div class="cell news-cell">
				<ul>
					<li><a href="">微软连续 10 年荣获教育部最佳合作伙伴奖</a></li>
					<li><a href="">Microsoft Philanthropies 宣布捐赠 10 亿美元云计算资源用于社会公益事业</a></li>
					<li><a href="">微软宣布推出 Project Online，加速团队达成重点战略目标</a></li>
					<li><a href="">资本寒冬里的“中国云”机遇</a></li>
					<li><a href="">德威公学：从绅士精英到“数字公民”</a></li>
				</ul>
			</div>
		</div>
	</div>
	
</div>
<div class="container">
	<div class="grid">
		<div class="row cells3">
			<div class="cell colspan2">hgjhgjhgjhg</div>
			<div class="cell">ytytruytruyt</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>