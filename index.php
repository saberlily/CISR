<!DOCTYPE html>
<html>
<head>
<title>Trung Tâm Kiểm Định 2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="/~saberlily/cisr/" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/reset.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/windows8ui/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/clock.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/feedback.css" />
<link type="text/css" rel="stylesheet" href="asserts/themes/new/css/style.css" />
<script type="text/javascript" src="asserts/themes/new/js/jquery.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery-ui.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery.validate.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/jquery.validate.additional.js"></script>
<script src="http://tab-slide-out.googlecode.com/files/jquery.tabSlideOut.v1.3.js"></script>
<script type="text/javascript" src="asserts/themes/new/js/nsn.js"></script>
</head>
<body id="kiemdinh" class="loading">
<div id="globalContainer">
	<header>
		<div id="globalHeader">
			<?php require('includes/layout/header.php'); ?>
		</div>
	</header>
	<section>
		<div id="globalBody">
			<div id="menuWrapper" class="loading">
				<?php require('includes/layout/menu.php'); ?>
			</div>
			<div id="contentWrapper" class="loading">
				<div id="leftWrapper" class="loading">
					<?php require('includes/layout/left_side.php'); ?>
				</div>
				<div id="content" class="hasRightWrapper">
                    <?php /*<div id="northContent">
						<?php require('includes/layout/north_content.php'); ?>
                    </div>*/?>
					<div id="rightWrapper" class="loading">
						<?php require('includes/layout/right_side.php'); ?>
					</div>
					<div id="mainContent" class="loading">
						<?php require('includes/layout/main_content.php'); ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>
	<footer>
		<div id="globalFooter">
			<?php require('includes/layout/footer.php'); ?>
		</div>
	</footer>
</div>
<div id="feedback_flyout">
	<a class="handle" href="http://link-for-non-js-users.html">Liên Hệ</a>
	<h3 class="title">Liên Hệ</h3>
	<div class="flyout_form">
		<label class="rowlabel">
			<span class="label">Họ Tên:</span>
			<input type="text" name="feedback_name" class="input" />
		</label>
		<label class="rowlabel">
			<span class="label">Chủ Đề:</span>
			<input type="text" name="feedback_subject" class="input" />
		</label>
		<label class="rowlabel">
			<span class="label">Nội Dung</span>
			<textarea name="feedback_content" class="input"></textarea>
		</label>
		<div class="buttons">
			<input type="button" value="Gửi" />
		</div>
	</div>
</div>
<script type="text/javascript">
    jQuery(function($){
        $('#feedback_flyout').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: 'http://www.building58.com/examples/images/contact_tab.gif', //path to the image for the tab //Optionally can be set using css
            imageHeight: '122px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '40px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'right',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 100,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '200px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: false                      //options: true makes it stick(fixed position) on scroll
        });
    });
</script>
<script type="text/javascript" src="asserts/themes/new/js/custom2.js"></script>
</body>
</html>