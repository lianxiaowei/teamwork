<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>基于php的成绩管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/test/Public/css/supersized.css">
<link rel="stylesheet" href="/test/Public/css/login.css">
<link href="/test/Public/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
<![endif]-->
<script src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/test/Public/js/jquery.form.js"></script>
<script type="text/javascript" src="/test/Public/js/tooltips.js"></script>
<script type="text/javascript" src="/test/Public/js/login.js"></script>
<style type="text/css">
body {
	background-image:url(/test/Public/images/backgrounds/3.jpg);
	background-size:cover; 
}
</style>
</head>

<body>
	<!-- <img src="/test/Public/images/backgrounds/0.jpg"> -->

<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<!-- <img src="/test/Public/images/logo.png" > -->
				<h1>学生信息管理系统</h1>
			</div>
		
			<div class="login_form">
				<form action="<?php echo U('Index:login');?>" id="login_form" method="post">
					<div class="form-group">
						<label for="j_username" class="t">账&nbsp;&nbsp;&nbsp;&nbsp;号：</label> 
						<input id="email" value="" name="username" type="text" class="form-control x319 in" 
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group">
						<label for="j_captcha" class="t">验证码：</label>
						 <input id="j_captcha" name="j_captcha" type="text" class="form-control x164 in">
						<img id="captcha_img" alt="点击更换" title="点击更换" src="/test/Public/images/captcha.jpeg" class="m">
					</div>
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" type="checkbox" value="true">&nbsp;记住登陆账号!</label>
					</div>
					<div class="form-group space">　
						<input type="submit" id="submit_btn" class="btn-new btn-pos input1" value="&nbsp;登&nbsp;录&nbsp;"/>
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn-new">
					</div>
				</form>
			</div>
		</div>
		<div class="bottom">Copyright &copy; 2017 - 2018 <a href="#">成绩管理</a></div>
	</div>
</div>

<!-- Javascript -->

<script src="/test/Public/js/supersized.3.2.7.min.js"></script>
<!-- <script src="/test/Public/js/supersized-init.js"></script> -->
<script src="/test/Public/js/scripts.js"></script>
<script type="text/javascript">
jQuery(function($){

    $.supersized({

        // Functionality
        slide_interval     : 4000,    // Length between transitions
        transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed   : 1000,    // Speed of transition
        performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

        // Size & Position
        min_width          : 0,    // Min width allowed (in pixels)
        min_height         : 0,    // Min height allowed (in pixels)
        vertical_center    : 1,    // Vertically center background
        horizontal_center  : 1,    // Horizontally center background
        fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
        fit_portrait       : 1,    // Portrait images will not exceed browser height
        fit_landscape      : 0,    // Landscape images will not exceed browser width

        // Components
        slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        slides             : [    // Slideshow Images
                                 {image : "/test/Public/images/backgrounds/0.jpg"},
                                 {image : 'Public/images/backgrounds/1.jpg'},
                                 {image : 'images/backgrounds/2.jpg'},
								 {image : 'images/backgrounds/3.jpg'}
                       ]

    });

});

</script>
<div style="text-align:center;">
</div>
</body>
</html>